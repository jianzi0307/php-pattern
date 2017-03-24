<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/24
 * Time: 9:52
 */

namespace com\pattern\abstractfactory\model;


use com\pattern\abstractfactory\itf\IFood;

/**
 * 饮料基类
 * @package com\pattern\abstractfactory\model
 */
abstract class AbstractBeverage extends AbstractBaseFood implements IFood
{
    public function printMessage()
    {
        print "--" . $this->kind . "饮料,\t 单价：" . $this->price . ",\t数量：" . $this->num . ",\t合计：" . $this->totalPrice() . PHP_EOL;
    }
}