<?php
require('../loader/autoload.php');

/**
 * 责任链模式
 */

$masterHandler = new \com\pattern\chainofresponsibility\impl\SchoolMasterHandler();
$teacherHandler = new \com\pattern\chainofresponsibility\impl\TeacherHandler();
$squadLeaderHandler = new \com\pattern\chainofresponsibility\impl\SquadLeaderHandler();

for ($i = 0; $i < 3; $i++) {
    $student = new \com\pattern\chainofresponsibility\message\Student(random_int(0, 2), '学生' . $i . '生病了,要请假！');
    print '==========================================' . PHP_EOL;
    if (0 == $student->getState()) {
        $squadLeaderHandler->handleRequest($student);
    } else {
        print '请求上级批复' . PHP_EOL;
        if (1 == $student->getState()) {
            $teacherHandler->handleRequest($student);
        } else {
            print '请求上级批复' . PHP_EOL;
            $masterHandler->handleRequest($student);
        }
    }
}