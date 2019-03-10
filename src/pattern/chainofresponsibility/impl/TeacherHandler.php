<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/30
 * Time: 11:23
 */

namespace src\pattern\chainofresponsibility\impl;


use src\pattern\chainofresponsibility\handler\AbstractHandler;
use src\pattern\chainofresponsibility\message\IStudent;

/**
 * 老师
 * @package src\pattern\chainofresponsibility\impl
 */
class TeacherHandler extends AbstractHandler
{
    public function process(IStudent $student): void
    {
        print "老师批复：" . $student->getRequestMessage() . PHP_EOL;
    }
}