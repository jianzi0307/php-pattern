<?php
/**
 * Created by PhpStorm.
 * User: jianzi0307
 * Date: 2019/3/10
 * Time: 21:32
 */

namespace src\algorithm\sorting;


/**
 * 快速排序
 * @package src\algorithm\sorting
 */
class QuickSort
{
    /**
     * 排序
     * @param array $arr
     * @return array
     */
    public static function sort(array $arr)
    {
        $size = count($arr);

        // 递归结束条件
        if ($size <= 1) {
            return $arr;
        }

        // 取第一个元素为基准值
        $pivot = array_shift($arr);
        // 放在中间部分
        $middle = [$pivot];
        $left = [];
        $right = [];

        while ($item = array_shift($arr)) {
            // 与基准值相等放在中间部分
            if ($pivot === $item) {
                $middle[] = $item;
            }

            // 大于基准值放在右边部分
            if ($pivot < $item) {
                $right[] = $item;
            }

            // 小于基准值放在左边部分
            if ($pivot > $item) {
                $left[] = $item;
            }
        }

        // 递归对左侧部分和右侧部分进行排序，中间部分的值均相等，不需要排序
        $left = self::sort($left);
        $right = self::sort($right);

        //按序合并三部分
        return array_merge(
            $left, $middle, $right
        );
    }
}
