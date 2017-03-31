<?php
/**
 * Ioc 控制反转、依赖反转、依赖倒置、依赖注入
 */
require_once('../../loader/autoload.php');

$floppy = new \com\pattern\ioc\FloppyWriter();
$business = new \com\pattern\ioc\Business($floppy);
$business->save();

$usb = new \com\pattern\ioc\UsbWriter();
$business->setWriter($usb);
$business->save();