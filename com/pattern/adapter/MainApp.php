<?php
require ('../loader/autoload.php');
//例如： 电脑需要一个12伏特的电源，但是现在只有220伏特的电源
//所以需要一个输出12伏特的适配器
$power220 = new \com\pattern\adapter\model\power\Power220();
$power220->output220v();

//使用对象适配器
$adapter = new \com\pattern\adapter\model\power\AdapterPower12($power220);
$adapter->output12v();

//使用类适配器
$adapter2 = new \com\pattern\adapter\model\power\AdapterPowerEx12($power220);
$adapter2->output12v();