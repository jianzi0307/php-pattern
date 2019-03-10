<?php

require_once '../../../vendor/autoload.php';

use src\pattern\decorator\button\Button;
use src\pattern\decorator\button\ColorDecorator;
use src\pattern\decorator\button\SizeDecrorator;

/**
 * 装饰器模式
 */
//创建一个普通的按钮

$button = new Button();
$button->operation();

print PHP_EOL;

//创建一个红色的按钮
$colorButton = new ColorDecorator($button);
$colorButton->setColor('红色的');
$colorButton->operation();


//创建一个大尺寸的按钮
$sizeButton = new SizeDecrorator($button);
$sizeButton->setSize('大尺寸的');
$sizeButton->operation();

//创建一个红色的大尺寸的按钮
$sizeColorButton = new SizeDecrorator($colorButton);
$sizeColorButton->setSize('大尺寸的');
$sizeColorButton->operation();
