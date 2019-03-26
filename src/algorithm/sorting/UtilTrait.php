<?php
/**
 * Created by PhpStorm.
 * User: jianzi0307
 * Date: 2019/3/26
 * Time: 22:39
 */

namespace src\algorithm\sorting;


trait UtilTrait
{
    /**
     * 交换
     * @param $a
     * @param $b
     */
    protected static function _swap(&$a, &$b)
    {
        $a ^= $b;
        $b ^= $a;
        $a ^= $b;
    }
}