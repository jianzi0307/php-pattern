<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/24
 * Time: 17:45
 */

namespace com\pattern\prototype;


class LifeFactoryImpl implements ILifeFactory
{
    private $dayLife;

    function __construct()
    {
        $this->dayLife = new DayLife();
    }

    public function getNewInstance(): DayLife
    {
        print " 复制一天---> ".PHP_EOL;
        return clone $this->dayLife;
    }
}