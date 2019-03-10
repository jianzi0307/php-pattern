<?php

require_once '../../../vendor/autoload.php';

/**
 * 桥接模式
 */

use src\pattern\bridge\lights\impl\CrystalLight;
use src\pattern\bridge\lights\impl\IncanLight;
use src\pattern\bridge\switchs\BaseSwitch;
use src\pattern\bridge\switchs\sub\RemoteControllSwitch;

//白炽灯
$light1 = new IncanLight();

//水晶灯
$light2 = new CrystalLight();

print '--------- 一般开关控制白炽灯' . PHP_EOL;
$switch = new BaseSwitch($light1);
$switch->makeLight();

print '--------- 遥控开关控制水晶灯' . PHP_EOL;
$remoteSwitch = new RemoteControllSwitch($light2);
$remoteSwitch->makeRemoteLight(2);

print '--------- 遥控开关控制白炽灯' . PHP_EOL;
$remoteSwitch2 = new RemoteControllSwitch($light1);
$remoteSwitch2->makeRemoteLight(2);
