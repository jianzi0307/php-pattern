<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/24
 * Time: 9:56
 */

namespace src\pattern\abstractfactory\model\kfc;

use src\pattern\abstractfactory\model\AbstractChickenWings;

/**
 * 奥尔良鸡翅
 * @package src\pattern\abstractfactory\model\kfc
 */
class ChinaChickenWings extends AbstractChickenWings
{
    function __construct(int $num)
    {
        $this->price = 2.5;
        $this->kind = "奥尔良";
        $this->num = $num;
    }
}