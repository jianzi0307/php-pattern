<?php
/**
 * 抽象工厂模式
 */

namespace src\pattern\abstractfactory;

use src\pattern\abstractfactory\model\kfc\ChinaKfcFactory;
use src\pattern\abstractfactory\custom\Customer;

$kfc = new  ChinaKfcFactory();
$customer = new Customer($kfc);
$total = $customer->orderHumburg(10);
$total += $customer->orderBeverage(2);
$total += $customer->orderChickenWings(12);
$total += $customer->orderFrenchFries(1);

print "合计：" . $total . PHP_EOL;