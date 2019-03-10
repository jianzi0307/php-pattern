<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/23
 * Time: 16:31
 */

namespace src\pattern\factorymethod\itf;


use src\pattern\factorymethod\model\AbsSword;

interface ISwordFactory
{
    public function createSword():AbsSword;
}