<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/27
 * Time: 16:22
 */

namespace com\pattern\bridge\lights\impl;

use com\pattern\bridge\lights\ILight;

/**
 * 水晶燈
 * @package com\pattern\bridge\lights\impl
 */
class CrystalLight implements ILight
{
    public function eleConnected(): void
    {
        print '水晶燈被打開了' . PHP_EOL;
    }

    public function light(): void
    {
        print '水晶燈開始照明' . PHP_EOL;
    }

    public function eleClosed(): void
    {
        print '水晶燈被關閉了' . PHP_EOL;
    }
}