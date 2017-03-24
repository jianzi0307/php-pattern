<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/24
 * Time: 10:54
 */

namespace com\pattern\abstractfactory\custom;

use com\pattern\abstractfactory\itf\IKfcFactory;

/**
 * 顾客类
 * @package com\pattern\abstractfactory\custom
 */
class Customer
{
    private $kfcFactory;

    function __construct(IKfcFactory $kfcFactory)
    {
        $this->kfcFactory = $kfcFactory;
    }

    /**
     * 订购汉堡
     * @param int $num
     * @return float
     */
    public function orderHumburg(int $num):float
    {
        $hamburg = $this->kfcFactory->createHamburg($num);
        $hamburg->printMessage();
        return $hamburg->totalPrice();
    }

    /**
     * 订购薯条
     * @param int $num
     * @return float
     */
    public function orderFrenchFries(int $num):float
    {
        $frenchFries = $this->kfcFactory->createFrenchFries($num);
        $frenchFries->printMessage();
        return $frenchFries->totalPrice();
    }

    /**
     * 订购饮料
     * @param int $num
     * @return float
     */
    public function orderBeverage(int $num):float
    {
        $beverage = $this->kfcFactory->createBeverage($num);
        $beverage->printMessage();
        return $beverage->totalPrice();
    }

    /**
     * 订购鸡翅
     * @param $num
     * @return float
     */
    public function orderChickenWings($num):float
    {
        $chickenWings = $this->kfcFactory->createChickenWings($num);
        $chickenWings->printMessage();
        return $chickenWings->totalPrice();
    }

}