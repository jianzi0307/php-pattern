<?php
require('../loader/autoload.php');

$dayLifeFactory = new \com\pattern\prototype\LifeFactoryImpl();

$day1 = $dayLifeFactory->getNewInstance();
$day1->setWakeup('8:00');
$day1->printMessage();

$day2 = $dayLifeFactory->getNewInstance();
$day2->setWakeup('9:00');
$day2->printMessage();