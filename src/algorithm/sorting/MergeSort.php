<?php
/**
 * Created by PhpStorm.
 * User: jianzi0307
 * Date: 2019/3/10
 * Time: 21:41
 */

namespace src\algorithm\sorting;

/**
 * 归并排序
 * @package src\algorithm\sorting
 */
class MergeSort
{
    /**
     * 排序
     * @param array $arr
     * @return array
     */
    public static function sort(array $arr)
    {
        $size = count($arr);
        if ($size <= 1) {
            return $arr;
        }

        //取数组的中间元素索引
        $midIndex = ($size >> 1);

        //根据中间索引分割为两个数组
        $left = array_slice($arr, 0, $midIndex);
        $right = array_slice($arr, $midIndex);

        // 递归分割
        $left = self::sort($left);
        $right = self::sort($right);

        return self::_merge($left, $right);
    }

    /**
     * 归并排序核心算法：排序并合并
     * 提示：
     * 将a和b看作两个栈，判断两个栈顶元素大小，较小的元素出栈
     * @param array $a
     * @param array $b
     * @return array
     */
    protected static function _merge(array $a, array $b)
    {
        $sorted = [];
        while (count($a) > 0 && count($b) > 0) {
            // 要用array_shift进行出栈操作
            if ($a[0] > $b[0]) {
                $sorted[] = array_shift($b);
            } else {
                $sorted[] = array_shift($a);
            }
        }
        // 如果堆栈非空,将剩余的元素出栈
        while (count($a)) {
            $sorted[] = array_shift($a);
        }
        while (count($b)) {
            $sorted[] = array_shift($b);
        }

        // 或：
//        if (count($a)) {
//            $sorted = array_merge($sorted, $a);
//        }
//        if (count($b)) {
//            $sorted = array_merge($sorted, $b);
//        }
        return $sorted;
    }
}