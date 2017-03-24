<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/23
 * Time: 16:34
 */

namespace com\pattern\factorymethod;


use com\pattern\factorymethod\itf\ISwordFactory;
use com\pattern\factorymethod\model\AbsSword;
use com\pattern\factorymethod\model\object\SevenStarSword;

/**
 * 拥有七星宝刀的曹操
 * @package com\pattern\factorymethod
 */
class CaoCao implements ISwordFactory
{
    public function createSword():AbsSword
    {
        return new SevenStarSword();
    }
}