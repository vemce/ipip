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

$location = Ip::find('120.77.247.147');
var_dump($location);
$location = Ip::locationString('120.77.247.147');
echo $location;
```
## IP数据更新地址

https://www.ipip.net/ipdb/test