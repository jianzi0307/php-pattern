<?php

/**
 * 给定一个非空整数数组，除了某个元素只出现一次以外，其余每个元素均出现两次。找出那个只出现了一次的元素。
 */
class Solution
{
    /**
     * 利用异或的特性：
     * x^0=x
     * x^x=0
     * 提示： 同一个数，偶数次与自身异或结果为0，奇数异或结果为自身； 与0异或结果不变；
     */
    function singleNumber($nums)
    {
        $res = 0;
        foreach ($nums as $v) {
            $res ^= $v;
        }
        return $res;
    }
}

