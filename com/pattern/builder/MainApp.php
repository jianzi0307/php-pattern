<?php
/**
 * 建造者模式
 */
require('../loader/autoload.php');

function printMessage(\com\pattern\builder\model\MobilePackage $mobilePackage): void
{
    print '-- 话费：' . $mobilePackage->getMoney() . ', 短信：' . $mobilePackage->getSms() . ',彩铃：' . $mobilePackage->getMusic() . PHP_EOL;
}

$impl1 = new \com\pattern\builder\itf\MobileBuilderImpl1();
$impl2 = new \com\pattern\builder\itf\MobileBuilderImpl2();

$director = new \com\pattern\builder\director\MobileDirector();
$mobilePackage1 = $director->createMobilePackage($impl1);
$mobilePackage2 = $director->createMobilePackage($impl2);

printMessage($mobilePackage1);
printMessage($mobilePackage2);