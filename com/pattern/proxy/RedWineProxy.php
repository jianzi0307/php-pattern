<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/30
 * Time: 9:57
 */

namespace com\pattern\proxy;

/**
 * 代理
 * @package com\pattern\proxy
 */
class RedWineProxy implements IRedWine
{
    protected $readWine;

    function __construct(IRedWine $redWine)
    {
        $this->readWine = $redWine;
    }

    public function product(): void
    {
        $this->readWine->product();
    }

    public function sell(): void
    {
        $this->readWine->sell();
    }
}