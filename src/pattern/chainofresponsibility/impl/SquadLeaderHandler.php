<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/30
 * Time: 11:21
 */

namespace src\pattern\chainofresponsibility\impl;


use src\pattern\chainofresponsibility\handler\AbstractHandler;
use src\pattern\chainofresponsibility\message\IStudent;

/**
 * 班长
 * @package src\pattern\chainofresponsibility\impl
 */
class SquadLeaderHandler extends AbstractHandler
{
    public function process(IStudent $student): void
    {
        print "班长批复：" . $student->getRequestMessage() . PHP_EOL;
    }
}