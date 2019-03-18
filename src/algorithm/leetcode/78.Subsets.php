<?php

class Solution1
{
    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function subsets($nums)
    {
        $res = [[]];
        foreach ($nums as $num) {
            foreach ($res as $subAry) {
                array_push($subAry, $num);
                array_push($res, $subAry);
            }
        }
        return $res;
    }
}


class Solution2
{
    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function subsets($nums)
    {
        // 元素个数
        $size = count($nums);
        // 子集个数 2^n <=> 1<<n
        $count = 1 << $size;
        // 幂集
        $powerSet = [];
        for ($i = 0; $i < $count; $i++) {
            $sub = [];
            for ($j = 0; $j < $size; $j++) {
                // 取x二进制数第n位的值 : (x>>n)&1
                if (($i >> $j) & 1 === 1) {
                    array_push($sub, $nums[$j]);
                }
            }
            array_push($powerSet, $sub);
        }
        return $powerSet;
    }
}