<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/31
 * Time: 9:26
 */

namespace com\pattern\algorithm\string\time33;

/**
 * Time33算法
 * hash(i) = hash(i-1) * 33 + str[i]
 * @package com\pattern\algorithm\string\time33
 */
class Time33
{
    public function time33($str)
    {
        $hash = 0;
        $s = md5($str);
        $len = strlen($s);
        for ($i = 0; $i < $len; $i++) {
            $hash = (($hash << 5) + $hash) + ord($s{$i});
        }
        return $hash & 0x7FFFFFFF;
    }
}

$time33 = new Time33();
print 'time33: ' . $time33->time33('iasodfjasjfd') . PHP_EOL;