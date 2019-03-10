<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/24
 * Time: 9:59
 */
namespace src\pattern\abstractfactory\model\kfc;

use src\pattern\abstractfactory\model\AbstractBeverage;

/**
 * 可乐
 * @package src\pattern\abstractfactory\model\kfc
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