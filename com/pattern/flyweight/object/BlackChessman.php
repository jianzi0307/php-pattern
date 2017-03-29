<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/29
 * Time: 11:21
 */

namespace com\pattern\flyweight\object;


class BlackChessman extends AbstractChessman
{
    function __construct()
    {
        parent::__construct('黑');
        print '执行黑棋子的构造函数'.PHP_EOL;
    }
}