<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/24
 * Time: 10:45
 */

namespace com\pattern\abstractfactory\model\kfc;


use com\pattern\abstractfactory\itf\IKfcFactory;
use com\pattern\abstractfactory\model\AbstractBeverage;
use com\pattern\abstractfactory\model\AbstractChickenWings;
use com\pattern\abstractfactory\model\AbstractFrenchFries;
use com\pattern\abstractfactory\model\AbstractHamburg;

/**
 * 肯德基工厂
 * @package com\pattern\abstractfactory\model\kfc
 */
class ChinaKfcFactory implements IKfcFactory
{
    public function createHamburg(int $num): AbstractHamburg
    {
        return new ChinaHamburg($num);
    }

    public function createChickenWings(int $num): AbstractChickenWings
    {
        return new ChinaChickenWings($num);
    }

    public function createFrenchFries(int $num): AbstractFrenchFries
    {
        return new ChinaFrenchFries($num);
    }

    public function createBeverage(int $num): AbstractBeverage
    {
        return new ChinaBeverage($num);
    }
}