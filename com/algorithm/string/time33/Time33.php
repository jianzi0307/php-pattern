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
    public function time33(string $str)
    {
        $hash = 0;
        $len = strlen($str);
        for ($i = 0; $i < $len; $i++) {
            $hash = $hash * 33 + ord($str{$i});
        }
        return $hash;
    }
}

$time33 = new Time33();
print $time33->time33('asaf') . PHP_EOL;
print $time33->time33('asadf') . PHP_EOL;
print $time33->time33('asdf') . PHP_EOL;