<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/23
 * Time: 16:23
 */

namespace com\pattern\factorymethod\model;

/**
 * 抽象的宝刀
 * @package com\pattern\factorymethod\model
 */
abstract class AbsSword
{
    private $name;

    /**
     * 获取宝刀名称
     * @return string
     */
    public function getName():string
    {
        return $this->name;
    }

    /**
     * 设置宝刀名称
     * @param string $name
     */
    public function setName(string $name):void
    {
        $this->name = $name;
    }
}