<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/30
 * Time: 13:02
 */

namespace src\pattern\memento\caretaker;

use src\pattern\memento\memento\Memento;

/**
 * 备忘录的管理者
 * @package src\pattern\memento\caretaker
 */
class CareTaker
{
    private $memento;

    public function getMemento():Memento
    {
        return $this->memento;
    }

    public function setMemento(Memento $memento)
    {
        $this->memento = $memento;
    }
}
