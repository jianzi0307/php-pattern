<?php

require_once '../../../vendor/autoload.php';

use src\pattern\prototype\LifeFactoryImpl;

/**
 * 原型模式
 */
$dayLifeFactory = new LifeFactoryImpl();

$day1 = $dayLifeFactory->getNewInstance();
$day1->setWakeup('8:00');
$day1->printMessage();

$day2 = $dayLifeFactory->getNewInstance();
$day2->setWakeup('9:00');
$day2->printMessage();
