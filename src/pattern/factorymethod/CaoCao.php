<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/23
 * Time: 16:34
 */

namespace src\pattern\factorymethod;


use src\pattern\factorymethod\itf\ISwordFactory;
use src\pattern\factorymethod\model\AbsSword;
use src\pattern\factorymethod\model\object\SevenStarSword;

/**
 * 拥有七星宝刀的曹操
 * @package src\pattern\factorymethod
 */
class CaoCao implements ISwordFactory
{
    public function createSword():AbsSword
    {
        return new SevenStarSword();
    }
}