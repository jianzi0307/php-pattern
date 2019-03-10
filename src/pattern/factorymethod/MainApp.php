<?php

namespace src\pattern\factorymethod;

/**
 * 工厂方法模式
 */

$swordFactory = new CaoCao2();
$sword = $swordFactory->createSword();
echo "曹操使用 " . $sword->getName() . " 刺杀董卓。";
