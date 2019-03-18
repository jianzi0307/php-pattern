<?php

/**
 * Definition for an interval.
 * class Interval {
 *     public $start = 0;
 *     public $end = 0;
 *     function __construct(int $start = 0, int $end = 0) {
 *         $this->start = $start;
 *         $this->end = $end;
 *     }
 * }
 */
class Solution
{
    private function _sort(&$intervals)
    {
        $size = count($intervals);
        if ($size <= 1) {
            return $intervals;
        }
        $mid = ($size >> 1);
        $left = array_slice($intervals, 0, $mid);
        $right = array_slice($intervals, $mid);
        return $this->_merge(
            $this->merge($left),
            $this->merge($right)
        );
    }

    /**
     *
     * @param Interval[] $intervals
     *
     * @return Interval[]
     */
    function merge($intervals)
    {
        $size = count($intervals);
        if ($size <= 1) {
            return $intervals;
        }
        $intervals = $this->_sort($intervals);
        $res = [$intervals[0]];
        $cur = 0;
        for ($i = 1; $i < $size; ++$i) {
            if ($intervals[$i]->start > $res[$cur]->end) {
                $res [] = $intervals[$i];
                $cur++;
            } else {
                $res[$cur]->end = max($res[$cur]->end, $intervals[$i]->end);
            }
        }
        return $res;
    }

    private function _merge($a, $b)
    {
        $merged = [];
        while (count($a) && count($b)) {
            if ($a[0]->start >= $b[0]->start) {
                $merged[] = array_shift($b);
            } else {
                $merged[] = array_shift($a);
            }
        }
        if (count($a)) {
            $merged = array_merge($merged, $a);
        }
        if (count($b)) {
            $merged = array_merge($merged, $b);
        }
        return $merged;
    }
}
