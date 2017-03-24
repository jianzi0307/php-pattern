<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/24
 * Time: 9:59
 */
namespace com\pattern\abstractfactory\model\kfc;

use com\pattern\abstractfactory\model\AbstractBeverage;

/**
 * 可乐
 * @package com\pattern\abstractfactory\model\kfc
 */
class ChinaBeverage extends AbstractBeverage
{
    function __construct(int $num)
    {
        $this->kind = "可乐";
        $this->num = $num;
        $this->price = 7.0;
    }
}