<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/24
 * Time: 17:44
 */

namespace src\pattern\prototype;


interface ILifeFactory
{
    public function getNewInstance():DayLife;
}