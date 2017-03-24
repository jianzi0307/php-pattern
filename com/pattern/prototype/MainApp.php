<?php
require('../loader/autoload.php');

$dayLifeFactory = new \com\pattern\prototype\LifeFactoryImpl();

$day1 = $dayLifeFactory->getNewInstance();
$day1->printMessage();

$day2 = $dayLifeFactory->getNewInstance();
$day2->printMessage();