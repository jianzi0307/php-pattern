<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/24
 * Time: 17:41
 */

namespace com\pattern\prototype;


class DayLife
{
    function __construct()
    {
        print " 新的一天===>" . PHP_EOL;
    }

    public function printMessage()
    {
        print "一天过去了 " . PHP_EOL;
    }
}