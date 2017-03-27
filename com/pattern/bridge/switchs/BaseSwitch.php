<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/27
 * Time: 16:11
 */

namespace com\pattern\bridge\switchs;


use com\pattern\bridge\lights\ILight;

/**
 * 开关基类
 * @package com\pattern\bridge\switchs
 */
class BaseSwitch
{
    protected $light;

    function __construct(ILight $light)
    {
        $this->light = $light;
    }

    /**
     * 开灯
     */
    final public function makeLight():void
    {
        $this->light->eleConnected();
        $this->light->light();
        $this->light->eleClosed();
    }
}