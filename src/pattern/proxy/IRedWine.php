<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/30
 * Time: 9:53
 */

namespace src\pattern\proxy;

/**
 * 红酒生产接口
 * @package src\pattern\proxy
 */
interface IRedWine
{
    /**
     * 红酒
     */
    public function product():void;

    /**
     * 售卖
     */
    public function sell():void;
}