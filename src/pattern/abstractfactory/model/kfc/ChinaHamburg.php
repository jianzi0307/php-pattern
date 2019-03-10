<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/24
 * Time: 9:54
 */

namespace src\pattern\abstractfactory\model\kfc;

use src\pattern\abstractfactory\model\AbstractHamburg;

/**
 * 麻辣鸡腿汉堡
 * @package src\pattern\abstractfactory\model\kfc
 */
class ChinaHamburg extends AbstractHamburg
{
    function __construct(int $num)
    {
        $this->kind = "麻辣";
        $this->num = $num;
        $this->price = 14.5;
    }
}