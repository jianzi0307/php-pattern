<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/24
 * Time: 9:27
 */

namespace src\pattern\abstractfactory\itf;

/**
 * 抽象食物接口
 * @package src\pattern\abstractfactory\itf
 */
interface IFood
{
    /**
     * 打印输出食物信息
     * @return mixed
     */
    public function printMessage();
}