<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/30
 * Time: 11:19
 */

namespace com\pattern\chainofresponsibility\handler;


use com\pattern\chainofresponsibility\message\IStudent;

abstract class AbstractHandler implements IHandler
{
    /**
     * 处理请求，交给子类处理
     * @param IStudent $student
     */
    abstract public function process(IStudent $student):void;

    public function handleRequest(IStudent $student): void
    {
        if (null != $student) {
            $this->process($student);
        }
    }
}