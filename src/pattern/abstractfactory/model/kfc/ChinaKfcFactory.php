<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/24
 * Time: 10:45
 */

namespace src\pattern\abstractfactory\model\kfc;


use src\pattern\abstractfactory\itf\IKfcFactory;
use src\pattern\abstractfactory\model\AbstractBeverage;
use src\pattern\abstractfactory\model\AbstractChickenWings;
use src\pattern\abstractfactory\model\AbstractFrenchFries;
use src\pattern\abstractfactory\model\AbstractHamburg;

/**
 * 肯德基工厂
 * @package src\pattern\abstractfactory\model\kfc
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