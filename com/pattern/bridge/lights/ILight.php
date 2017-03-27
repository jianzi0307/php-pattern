<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/27
 * Time: 16:08
 */

namespace com\pattern\bridge\lights;

/**
 * 电灯接口
 * @package com\pattern\bridge\lights
 */
interface ILight
{
    /**
     *  通电
     */
    public function eleConnected():void;

    /**
     * 照明
     */
    public function light():void;

    /**
     * 断电
     */
    public function eleClosed():void;
}