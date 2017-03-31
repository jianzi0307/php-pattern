<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/30
 * Time: 12:43
 */

require('../../loader/autoload.php');
/**
 * 备忘录模式
 */

//角色
$hero = new \com\pattern\memento\originator\Hero();
//管理者
$caretaker = new \com\pattern\memento\caretaker\CareTaker();

//保存挑战前的状态
$caretaker->setMemento($hero->createMemento());

//只有三次挑战Boss的机会
$cnt = 1;

$ko = -1;

while ($ko != 1 && $cnt <= 3) {
    print '第' . $cnt . '次挑战' . PHP_EOL;

    //开始挑战
    $ko = $hero->attackBoss();
    while (true) {
        if ($ko == -1) {
            //挑战失败，恢复到初始状态，累加挑战次数
            $hero->restoreFromMemento($caretaker->getMemento());
            $cnt += 1;
            break;
        } else if ($ko == 0) {
            //继续挑战
            $ko = $hero->attackBoss();
        } else if ($ko == 1) {
            //挑战成功
            break;
        }
    }
}