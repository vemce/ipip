# 基于ipip的ip位置获取程序

## 安装

```shell
$ composer require vemce/ipip
```

## 用法

```php
<?php
use vemce\ipip\Ip;
require 'vendor/autoload.php';

$location = Ip::find('113.101.149.210');
var_dump($location);
$location = Ip::locationString('113.101.149.210');
echo $location;
```