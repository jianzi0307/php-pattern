<?php
/**
 * User: jian0307@icloud.src
 * Date: 2017/3/24
 * Time: 10:06
 */

namespace src\pattern\abstractfactory\itf;


use src\pattern\abstractfactory\model\AbstractBeverage;
use src\pattern\abstractfactory\model\AbstractChickenWings;
use src\pattern\abstractfactory\model\AbstractFrenchFries;
use src\pattern\abstractfactory\model\AbstractHamburg;

interface IKfcFactory
{
    /**
     * 生成汉堡
     * @param int $num
     * @return mixed
     */
    public function createHamburg(int $num):AbstractHamburg;

    /**
     * 生成饮料
     * @param int $num
     * @return mixed
     */
    public function createBeverage(int $num):AbstractBeverage;

    /**
     * 生成鸡翅
     * @param int $num
     * @return mixed
     */
    public function createChickenWings(int $num):AbstractChickenWings;

    /**
     * 生成薯条
     * @param int $num
     * @return mixed
     */
    public function createFrenchFries(int $num):AbstractFrenchFries;
}