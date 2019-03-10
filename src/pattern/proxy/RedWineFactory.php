<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/30
 * Time: 9:55
 */

namespace src\pattern\proxy;

/**
 * 红酒生产厂家
 * @package src\pattern\proxy
 */
class RedWineFactory implements IRedWine
{
    public function product(): void
    {
        print "1. 红酒生产厂家生产红酒" . PHP_EOL;
    }

    public function sell(): void
    {
        print "2. 红酒生产厂家售卖红酒" . PHP_EOL;
    }
}