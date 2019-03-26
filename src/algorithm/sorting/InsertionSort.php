<?php
/**
 * Created by PhpStorm.
 * User: jianzi0307
 * Date: 2019/3/16
 * Time: 22:49
 */

namespace src\algorithm\sorting;


class InsertionSort
{
    use UtilTrait;

    public static function sort($arr)
    {
        $size = count($arr);
        for ($i = 1; $i < $size; $i++) {
            $j = $i;
            while ($j > 0 && $arr[$j - 1] > $arr[$j]) {
                self::_swap($arr[$j - 1], $arr[$j]);
                $j--;
            }
        }
        return $arr;
    }
}