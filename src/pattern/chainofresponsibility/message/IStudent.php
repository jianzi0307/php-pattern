<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/30
 * Time: 11:13
 */

namespace src\pattern\chainofresponsibility\message;


interface IStudent
{
    /**
     * 获得学生状态
     * 0 小事情，班长处理
     * 1 班长处理不了，老师处理
     * 2 老师处理不了，校长处理
     * @return int
     */
    public function getState(): int;


    /**
     * 获得学生请假消息
     * @return string
     */
    public function getRequestMessage(): string;
}