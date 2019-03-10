<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/24
 * Time: 9:57
 */

namespace src\pattern\abstractfactory\model\kfc;

use src\pattern\abstractfactory\model\AbstractFrenchFries;

/**
 * 普通薯条
 * @package src\pattern\abstractfactory\model\kfc
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