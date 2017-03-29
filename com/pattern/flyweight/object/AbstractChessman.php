<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/29
 * Time: 11:20
 */

namespace com\pattern\flyweight\object;


abstract class AbstractChessman
{
    protected $chess;

    function __construct($chess)
    {
        $this->chess = $chess;
    }

    public function show(): void
    {
        print $this->chess . PHP_EOL;
    }
}