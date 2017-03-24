<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/23
 * Time: 10:20
 */

namespace com\pattern\ioc;

use com\pattern\ioc\itf\IDriverWriter;

class FloppyWriter implements IDriverWriter
{
    public function saveToDriver():void
    {
        echo __METHOD__.PHP_EOL;
    }
}