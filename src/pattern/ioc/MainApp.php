<?php

namespace src\pattern\ioc;

/**
 * Ioc 控制反转、依赖反转、依赖倒置、依赖注入
 */
$floppy = new FloppyWriter();
$business = new Business($floppy);
$business->save();

$usb = new UsbWriter();
$business->setWriter($usb);
$business->save();
