<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/27
 * Time: 10:19
 */

namespace src\pattern\adapter\itf;

/**
 * 220伏适配器接口
 * @package src\pattern\adapter\itf
 */
interface I220v
{
    /**
     * 输出220伏电
     * @return mixed
     */
    public function output220v();
}