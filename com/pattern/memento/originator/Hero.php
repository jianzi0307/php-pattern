<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/30
 * Time: 12:48
 */
namespace com\pattern\memento\originator;

use com\pattern\memento\memento\Memento;

class Hero
{
    private $blood;
    private $sword;

    function __construct()
    {
        $this->blood = 100;
        $this->sword = 100;
    }

    public function createMemento(): Memento
    {
        print '创建备忘录' . PHP_EOL;
        return new Memento($this->blood, $this->sword);
    }

    public function restoreFromMemento(Memento $memento): void
    {
        print '恢复备忘录中的状态....' . PHP_EOL;
        if ($memento != null) {
            $this->blood = $memento->getBlood();
            $this->sword = $memento->getSword();
        }
    }

    public function attackBoss(): int
    {
        if ($this->blood <= 0 || $this->sword <= 0) {
            $this->printState();
            print '挑战Bosss失败，很遗憾！' . PHP_EOL;
            return -1;
        }
        $random = random_int(0, 100);
        if ($random > 98) {
            $this->printState();
            print '挑战Boss成功，恭喜！' . PHP_EOL;
            return 1;
        } else {
            $this->printState();
            print '继续攻击Boss.......' . PHP_EOL;
            $bloodSub = random_int(0, 10);
            $swoodSub = random_int(0, 10);
            $this->blood -= $bloodSub;
            $this->sword -= $swoodSub;
            return 0;
        }
    }

    private function printState(): void
    {
        print '当前血量：' . $this->blood . ', 当前武力：' . $this->sword . PHP_EOL;
    }
}