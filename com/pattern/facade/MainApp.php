<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/29
 * Time: 9:40
 */

require('../loader/autoload.php');

/*
 不用facade模式的做法：
$fish = new \com\pattern\facade\SourSweetFish();
print "开始做糖醋鲤鱼...".PHP_EOL;
$fish->prepare();
$fish->step1();
$fish->step2();
$fish->step3();
$fish->step4();
$fish->step5();
$fish->end();
print "糖醋鲤鱼出锅...".PHP_EOL;
*/

/**
 * 外观模式、门面模式
 */
$facade = new \com\pattern\facade\CookFacade();
$facade->cookSourSweetFish();
