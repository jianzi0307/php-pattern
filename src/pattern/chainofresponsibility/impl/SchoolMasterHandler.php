<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/30
 * Time: 11:24
 */

namespace src\pattern\chainofresponsibility\impl;


use src\pattern\chainofresponsibility\handler\AbstractHandler;
use src\pattern\chainofresponsibility\message\IStudent;

/**
 * 校长
 * @package src\pattern\chainofresponsibility\impl
 */
class SchoolMasterHandler extends AbstractHandler
{
    public function process(IStudent $student): void
    {
        print '校长批复：' . $student->getRequestMessage() . PHP_EOL;
    }
}