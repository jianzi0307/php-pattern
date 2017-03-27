<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/27
 * Time: 17:07
 */

namespace com\pattern\composite\sub;


use com\pattern\composite\base\Worker;

class Employees extends Worker
{
    public function printMessage(): void
    {
        print "Name." . $this->getName() . ", NO." . $this->getNo() . ", Salary." . $this->getSalary() . PHP_EOL;
    }
}