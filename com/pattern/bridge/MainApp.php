<?php
/**
 * 桥接模式
 */
require('../loader/autoload.php');

//白炽灯
$light1 = new \com\pattern\bridge\lights\impl\IncanLight();

//水晶灯
$light2 = new \com\pattern\bridge\lights\impl\CrystalLight();

print '--------- 一般开关'.PHP_EOL;
$switch = new \com\pattern\bridge\switchs\BaseSwitch($light1);
$switch->makeLight();

print '--------- 遥控开关'.PHP_EOL;
$remoteSwitch = new \com\pattern\bridge\switchs\sub\RemoteControllSwitch($light2);
$remoteSwitch->makeRemoteLight(2);
