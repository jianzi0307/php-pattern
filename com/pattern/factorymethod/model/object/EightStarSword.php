<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/23
 * Time: 16:53
 */

namespace com\pattern\factorymethod\model\object;


use com\pattern\factorymethod\model\AbsSword;

/**
 * 八星宝刀
 * @package com\pattern\factorymethod\model\object
 */
class EightStarSword extends AbsSword
{
    function __construct()
    {
        $this->setName('八星宝刀');
    }
}