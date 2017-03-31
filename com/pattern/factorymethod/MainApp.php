<?php
/**
 * 工厂方法模式
 */
require_once('../../loader/autoload.php');

use \com\pattern\factorymethod\CaoCao2;

$swordFactory = new CaoCao2();
$sword = $swordFactory->createSword();
echo "曹操使用 ".$sword->getName()." 刺杀董卓。";