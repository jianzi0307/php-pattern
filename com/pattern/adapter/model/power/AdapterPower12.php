<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/27
 * Time: 10:32
 */

namespace com\pattern\adapter\model\power;


use com\pattern\adapter\itf\I12v;
use com\pattern\adapter\model\AbastractPower;

/**
 * 对象适配器
 *
 * 12伏特适配器
 * @package com\pattern\adapter\model\power
 */
class AdapterPower12 implements I12v
{
    protected $power;

    function __construct(AbastractPower $power)
    {
        $this->power = $power;
    }

    public function output12v()
    {
        print " -- 对象适配器电压转换中...".PHP_EOL;
        $inPower = $this->power->getPower();
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
        print "    这是[" . $inPower . $this->power->getUnit() . "]适配器." . PHP_EOL;
    }
}