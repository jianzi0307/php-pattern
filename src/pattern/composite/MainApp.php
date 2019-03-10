<?php
require_once '../../../vendor/autoload.php';

use src\pattern\composite\sub\Employees;
use src\pattern\composite\sub\Manager;

/**
 * 组合模式
 */
$boss = new Manager(1, '大老板', 100000);

$m1 = new Manager(2, '经理1', 20000);
$m2 = new Manager(3, '经理2', 20000);
$m3 = new Manager(4, '经理3', 20000);

$e1 = new Employees(101, '小王', 200);
$e2 = new Employees(201, '小刘', 250);
$e3 = new Employees(301, '小猪', 150);
$e4 = new Employees(401, '小狗', 190);

$m1->add($e1);
$m2->add($e2);
$m3->add($e3);
$m3->add($e4);

$boss->add($m1);
$boss->add($m2);
$boss->add($m3);

$boss->printMessage();
