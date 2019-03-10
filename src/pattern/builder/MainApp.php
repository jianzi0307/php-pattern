<?php

require_once '../../../vendor/autoload.php';

use src\pattern\builder\director\MobileDirector;
use src\pattern\builder\itf\MobileBuilderImpl1;
use src\pattern\builder\itf\MobileBuilderImpl2;
use src\pattern\builder\model\MobilePackage;

/**
 * 建造者模式
 */

function printMessage(MobilePackage $mobilePackage): void
{
    print '-- 话费：' . $mobilePackage->getMoney() . ', 短信：'
        . $mobilePackage->getSms() . ',彩铃：' . $mobilePackage->getMusic() . PHP_EOL;
}

$impl1 = new MobileBuilderImpl1();
$impl2 = new MobileBuilderImpl2();

$director = new MobileDirector();
$mobilePackage1 = $director->createMobilePackage($impl1);
$mobilePackage2 = $director->createMobilePackage($impl2);

printMessage($mobilePackage1);
printMessage($mobilePackage2);
