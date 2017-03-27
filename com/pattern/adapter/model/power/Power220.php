<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/27
 * Time: 10:24
 */

namespace com\pattern\adapter\model\power;


use com\pattern\adapter\itf\I220v;
use com\pattern\adapter\model\AbastractPower;

/**
 * 220伏特电源
 * @package com\pattern\adapter\model\power
 */
class Power220 extends AbastractPower implements I220v
{
    function __construct()
    {
        parent::__construct(220);
    }

    public function output220v()
    {
        print " -- 这是[" . $this->power . $this->unit . "]电源." . PHP_EOL;
    }
}