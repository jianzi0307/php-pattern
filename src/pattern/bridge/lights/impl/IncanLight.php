<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/27
 * Time: 16:20
 */
namespace src\pattern\bridge\lights\impl;

use src\pattern\bridge\lights\ILight;

/**
 * 白熾燈
 * @package src\pattern\bridge\lights\impl
 */
class IncanLight implements ILight
{
    public function eleConnected(): void
    {
        print '白熾燈被打開了' . PHP_EOL;
    }

    public function light(): void
    {
        print '白熾燈開始照明' . PHP_EOL;
    }

    public function eleClosed(): void
    {
        print '白熾燈被關閉了' . PHP_EOL;
    }
}