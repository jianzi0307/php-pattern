<?php
require('../loader/autoload.php');

/**
 * 装饰器模式
 */
//创建一个普通的按钮
$button = new \com\pattern\decorator\button\Button();
$button->operation();

print PHP_EOL;

//创建一个红色的按钮
$colorButton = new \com\pattern\decorator\button\ColorDecorator($button);
$colorButton->setColor('红色的');
$colorButton->operation();


//创建一个大尺寸的按钮
$sizeButton = new \com\pattern\decorator\button\SizeDecrorator($button);
$sizeButton->setSize('大尺寸的');
$sizeButton->operation();

//创建一个红色的大尺寸的按钮
$sizeColorButton = new \com\pattern\decorator\button\SizeDecrorator($colorButton);
$sizeColorButton->setSize('大尺寸的');
$sizeColorButton->operation();
