<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/27
 * Time: 10:23
 */

namespace com\pattern\adapter\model;

/**
 * 电源基类
 * @package com\pattern\adapter\model
 */
abstract class AbastractPower
{
    protected $power;
    protected $unit = 'V';

    function __construct(float $power)
    {
        $this->power = $power;
    }

    /**
     * @return float
     */
    public function getPower(): float
    {
        return $this->power;
    }

    /**
     * @return mixed
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param float $power
     */
    public function setPower(float $power)
    {
        $this->power = $power;
    }

    /**
     * @param mixed $unit
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
    }
}