<?php
/**
 * Created by PhpStorm.
 * User: jianzi0307
 * Date: 2019/3/10
 * Time: 21:27
 */

namespace src\algorithm\sorting;


/**
 * 冒泡排序
 * @package src\algorithm\sorting
 */
class BubbleSort
{
    /**
     * 排序
     * @param array $arr
     * @return array
     */
    public static function sort(array $arr)
    {
        $size = count($arr);
        for ($i = 0; $i < $size - 1; $i++) {
            for ($j = 0; $j < $size - 1 - $i; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    self::_swap($arr[$j], $arr[$j + 1]);
                }
            }
        }
        return $arr;
    }

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
