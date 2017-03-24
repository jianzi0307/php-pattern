<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/24
 * Time: 9:32
 */

namespace com\pattern\abstractfactory\model;


use com\pattern\abstractfactory\itf\IFood;

/**
 * 汉堡基类
 * @package com\pattern\abstractfactory\model
 */
abstract class AbstractHamburg extends AbstractBaseFood implements IFood
{
    public function printMessage()
    {
        print "--" . $this->kind . "风味汉堡,\t 单价：" . $this->price . ",\t数量：" . $this->num . ",\t合计：" . $this->totalPrice() . PHP_EOL;
    }
}