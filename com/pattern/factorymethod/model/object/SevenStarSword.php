<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/23
 * Time: 16:27
 */
namespace com\pattern\factorymethod\model\object;

use com\pattern\factorymethod\model\AbsSword;

/**
 * 七星宝刀
 * @package com\pattern\factorymethod\model\object
 */
class SevenStarSword extends AbsSword
{
    function __construct()
    {
        $this->setName('七星宝刀');
    }
}