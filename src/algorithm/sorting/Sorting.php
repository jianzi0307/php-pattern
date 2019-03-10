<?php
/**
 * Created by PhpStorm.
 * User: jianzi0307
 * Date: 2019/3/10
 * Time: 20:35
 */

namespace src\algorithm\sorting;


/**
 * # 排序算法
 * 10大排序算法
 *
 * 问题：快速排序与归并排序异同点？
 * 1. 都是分治思想，都使用递归；
 * 2. 快排在拆的过程中进行排序，归并先拆再合并，合并过程中排序；
 * 笼统的讲：
 * 快排以基准值拆分，大的放右边，相等的放中间，小的放左边，这就是排序的过程，拆完后即排好序了。
 * 归并以集合中间索引拆成左右两部分，两部分是无序的，一直拆到左右两部分各剩一个元素，然后各部分排序，再合并，合并完成后即排好序了。
 */

class Sorting
{
    /**
     * 冒泡排序
     * @param array $arr
     * @return array
     */
    public function bubbleSort(array $arr)
    {
        $size = count($arr);
        for ($i = 0; $i < $size - 1; $i++) {
            for ($j = 0; $j < $size - 1 - $i; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    $this->_swap($arr[$j], $arr[$j + 1]);
                }
            }
        }
        return $arr;
    }

    /**
     * 快速排序
     * 分治，递归
     * @param array $arr
     * @return array
     */
    public function quickSort(array $arr)
    {
        if (count($arr) <= 1) {
            return $arr;
        }

        // 取第一个元素为基准值
        $pivot = array_shift($arr);
        $centerPart = [$pivot];
        $leftPart = [];
        $rightPart = [];

        while ($item = array_shift($arr)) {
            if ($item === $pivot) {
                $centerPart[] = $item;
            } else if ($item > $pivot) {
                $rightPart[] = $item;
            } else {
                $leftPart[] = $item;
            }
        }

        $leftPart = $this->quickSort($leftPart);
        $rightPart = $this->quickSort($rightPart);

        return array_merge($leftPart, $centerPart, $rightPart);
    }

    /**
     * 归并排序
     * 分治，递归
     * @param array $arr
     * @return array
     */
    public function mergeSort(array $arr)
    {
        $size = count($arr);
        if ($size <= 1) {
            return $arr;
        }
        $middle = ($size >> 1);
        $leftPart = array_slice($arr, 0, $middle);
        $rightPart = array_slice($arr, $middle);
        return $this->_merge(
            $this->mergeSort($leftPart),
            $this->mergeSort($rightPart)
        );
    }

    /**
     * 交换
     * @param $a
     * @param $b
     */
    private function _swap(int &$a, int &$b)
    {
        $a ^= $b;
        $b ^= $a;
        $a ^= $b;
    }

    /**
     * 合并
     * @param array $a
     * @param array $b
     * @return array
     */
    private function _merge(array $a, array $b)
    {
        $sorted = [];
        while (count($a) > 0 && count($b)) {
            if ($a[0] > $b[0]) {
                $sorted[] = array_shift($b);
            } else {
                $sorted[] = array_shift($a);
            }
        }
        if (count($a)) {
            $sorted = array_merge($sorted, $a);
        }
        if (count($b)) {
            $sorted = array_merge($sorted, $b);
        }
        return $sorted;
    }
}
