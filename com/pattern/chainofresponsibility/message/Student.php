<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/30
 * Time: 11:15
 */

namespace com\pattern\chainofresponsibility\message;


class Student implements IStudent
{
    private $state;
    private $message;

    function __construct(int $state, string $message)
    {
        $this->state = $state;
        $this->message = $message;
    }

    public function getState():int
    {
        return $this->state;
    }

    public function getRequestMessage():string
    {
        return $this->message;
    }
}