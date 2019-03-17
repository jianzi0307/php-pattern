<?php
/**
 * Created by PhpStorm.
 * User: jianzi0307
 * Date: 2019/3/17
 * Time: 22:38
 */

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        $new = [];
        foreach ($nums as $k => $v) {
            $anotherNum = $target - $v;
            if (!in_array($anotherNum, $new)) {
                $new[$k] = $v;
            } else {
                $tmp = array_flip($new);
                return [$tmp[$anotherNum], $k];
            }
        }
        return [];
    }
}

$ary = [2, 7, 11, 15];
$target = 9;
$solution = new Solution();
print_r($solution->twoSum($ary, $target));