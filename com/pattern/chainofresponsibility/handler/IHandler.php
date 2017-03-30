<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/30
 * Time: 11:18
 */
namespace com\pattern\chainofresponsibility\handler;

use com\pattern\chainofresponsibility\message\IStudent;

/**
 * 处理者接口
 * @package com\pattern\chainofresponsibility\handler
 */
interface IHandler
{
    //处理请求
    public function handleRequest(IStudent $student):void;
}