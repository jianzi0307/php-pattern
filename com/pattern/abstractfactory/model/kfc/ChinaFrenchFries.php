<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/24
 * Time: 9:57
 */

namespace com\pattern\abstractfactory\model\kfc;

use com\pattern\abstractfactory\model\AbstractFrenchFries;

/**
 * 普通薯条
 * @package com\pattern\abstractfactory\model\kfc
 */
class ChinaFrenchFries extends AbstractFrenchFries
{
    function __construct(int $num)
    {
        $this->kind = "普通";
        $this->num = $num;
        $this->price = 8.0;
    }
}