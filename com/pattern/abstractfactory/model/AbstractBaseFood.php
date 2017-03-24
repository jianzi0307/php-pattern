<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/24
 * Time: 9:14
 */

namespace com\pattern\abstractfactory\model;

/**
 * 食品抽象类
 * @package com\pattern\abstractfactory\model
 */
abstract class AbstractBaseFood
{
    /**
     * 数量
     * @var
     */
    protected $num;

    /**
     * 种类
     * @var
     */
    protected $kind;

    /**
     * 价格
     * @var
     */
    protected $price;

    /**
     * 计算总价
     * @return float
     */
    public function totalPrice(): float
    {
        return $this->num * $this->price;
    }
}