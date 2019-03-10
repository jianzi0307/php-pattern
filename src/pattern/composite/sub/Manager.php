<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/27
 * Time: 16:53
 */

namespace src\pattern\composite\sub;


use src\pattern\composite\base\Group;
use src\pattern\composite\base\Worker;

/**
 * 經理
 * @package src\pattern\composite\sub
 */
class Manager extends Group
{
    protected $workers = array();

    public function add(Worker $worker): void
    {
        if (in_array($worker, $this->workers, true)) {
            return;
        }
        $this->workers[] = $worker;
    }

    public function remove(Worker $worker): void
    {
        $this->workers = array_udiff($this->workers, array($worker), function ($a, $b) {
            return ($a === $b) ? 0 : 1;
        });
    }

    public function printMessage(): void
    {
        print "Name." . $this->getName() . ", NO." . $this->getNo() . ", Salary." . $this->getSalary() . PHP_EOL;
        foreach ($this->workers as $worker) {
            $worker->printMessage();
        }
    }
}