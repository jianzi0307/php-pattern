<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/23
 * Time: 16:55
 */

namespace com\pattern\factorymethod;


use com\pattern\factorymethod\itf\ISwordFactory;
use com\pattern\factorymethod\model\AbsSword;
use com\pattern\factorymethod\model\object\EightStarSword;

/**
 * 拥有八星宝刀的曹操
 * @package com\pattern\factorymethod
 */
class CaoCao2 implements ISwordFactory
{
    public function createSword(): AbsSword
    {
        return new EightStarSword();
    }
}