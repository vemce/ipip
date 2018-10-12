<?php
/**
 * Created by PhpStorm.
 * User: vemce
 * Date: 2018/10/12
 * Time: 9:37
 */

$opts = [
    'http' => [
        'header' => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.81 Safari/537.36",
        'timeout' => "360"
    ],
    'ssl'=>[
        'verify_peer'=>false,
    ]
];
$context = stream_context_create($opts);
$db = file_get_contents('https://www.ipip.net/ipdb/test', false, $context);
if($db && md5($db) != md5_file('ipip.ipdb')){
    file_put_contents('ipip.ipdb', $db);
}
