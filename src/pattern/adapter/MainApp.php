<?php

namespace src\src\pattern\adapter;

use src\pattern\adapter\model\power\AdapterPower12;
use src\pattern\adapter\model\power\AdapterPowerEx12;
use src\pattern\adapter\model\power\Power220;

/**
 * 适配器模式
 */
//例如： 电脑需要一个12伏特的电源，但是现在只有220伏特的电源
//所以需要一个输出12伏特的适配器
$power220 = new Power220();
$power220->output220v();

//使用对象适配器
$adapter = new AdapterPower12($power220);
$adapter->output12v();

//使用类适配器
$adapter2 = new AdapterPowerEx12($power220);
$adapter2->output12v();
