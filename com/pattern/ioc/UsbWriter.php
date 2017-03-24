<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/23
 * Time: 10:29
 */

namespace com\pattern\ioc;

use com\pattern\ioc\itf\IDriverWriter;

class UsbWriter implements IDriverWriter
{
    public function saveToDriver()
    {
        echo __METHOD__ . PHP_EOL;
    }
}