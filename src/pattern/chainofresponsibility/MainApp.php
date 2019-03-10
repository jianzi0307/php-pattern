<?php

namespace src\pattern\chainofresponsibility;

use src\pattern\chainofresponsibility\impl\SchoolMasterHandler;
use src\pattern\chainofresponsibility\impl\SquadLeaderHandler;
use src\pattern\chainofresponsibility\impl\TeacherHandler;
use src\pattern\chainofresponsibility\message\Student;


/**
 * 责任链模式
 */
$masterHandler = new SchoolMasterHandler();
$teacherHandler = new TeacherHandler();
$squadLeaderHandler = new SquadLeaderHandler();

for ($i = 0; $i < 3; $i++) {
    $student = new Student(random_int(0, 2), '学生' . $i . '生病了,要请假！');
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