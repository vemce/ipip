<?php
/**
 * Created by PhpStorm.
 * User: mc
 * Date: 2018/9/7
 * Time: 16:24
 */

namespace vemce\ipip;


use ipip\db\Reader;

class Ip
{
    static public $db = null;

    public static function find($ip = '')
    {
        self::setDb();
        return self::$db->find($ip);
    }

    public static function locationString($ip = '')
    {
        $location = self::find($ip);
        return implode('', array_unique($location));
    }

    static private function setDb()
    {
        if (!self::$db) {
            $path = __DIR__ . '/ipip.ipdb';
            self::$db = new Reader($path);
        }
    }
}