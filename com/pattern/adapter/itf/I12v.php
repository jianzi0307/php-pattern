<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/27
 * Time: 10:19
 */

namespace com\pattern\adapter\itf;

/**
 * 12伏特适配器接口
 * @package com\pattern\adapter\itf
 */
interface I12v
{
    /**
     * 输出12伏特电
     * @return mixed
     */
    public function output12v();
}