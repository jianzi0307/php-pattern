<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/24
 * Time: 9:47
 */

namespace src\pattern\abstractfactory\model;


use src\pattern\abstractfactory\itf\IFood;

/**
 * 鸡翅基类
 * @package src\pattern\abstractfactory\model
 */
abstract class AbstractChickenWings extends AbstractBaseFood implements IFood
{
    public function printMessage()
    {
        print "--" . $this->kind . "风味鸡翅,\t 单价：" . $this->price . ",\t数量：" . $this->num . ",\t合计：" . $this->totalPrice() . PHP_EOL;
    }
}