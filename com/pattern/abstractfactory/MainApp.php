<?php
/**
 * 抽象工厂模式
 */
require ('../loader/autoload.php');

$kfc = new \com\pattern\abstractfactory\model\kfc\ChinaKfcFactory();
$customer = new \com\pattern\abstractfactory\custom\Customer($kfc);
$total = $customer->orderHumburg(10);
$total += $customer->orderBeverage(2);
$total += $customer->orderChickenWings(12);
$total += $customer->orderFrenchFries(1);

print "合计：".$total.PHP_EOL;