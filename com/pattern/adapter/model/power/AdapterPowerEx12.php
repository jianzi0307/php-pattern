<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/27
 * Time: 10:59
 */

namespace com\pattern\adapter\model\power;

use com\pattern\adapter\itf\I12v;
use com\pattern\adapter\model\AbastractPower;

/**
 * 类适配器
 * @package com\pattern\adapter\model\power
 */
class AdapterPowerEx12 extends AbastractPower implements I12v
{
    function __construct(AbastractPower $power)
    {
        parent::__construct($power->getPower());
    }

    public function output12v()
    {
        print " -- 类适配器电压转换中...".PHP_EOL;
        $inPower = $this->getPower();
        if ($inPower == 380) {
            $inPower = $inPower / 31.67;
        } else if ($inPower == 220) {
            $inPower = $inPower / 18.33;
        } else if ($inPower == 110) {
            $inPower = $inPower / 9.17;
        } else {
            print '不能适配电源' . PHP_EOL;
        }

        $inPower = round($inPower);
        print "    这是[" . $inPower . $this->getUnit() . "]适配器." . PHP_EOL;
    }
}