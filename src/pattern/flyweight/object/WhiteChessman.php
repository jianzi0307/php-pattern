<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/29
 * Time: 11:23
 */

namespace src\pattern\flyweight\object;

/**
 * 白棋
 * @package src\pattern\flyweight\object
 */
class WhiteChessman extends AbstractChessman
{
    function __construct()
    {
        parent::__construct('白');
        print '执行白棋子的构造函数' . PHP_EOL;
    }
}