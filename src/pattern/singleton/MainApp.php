<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/27
 * Time: 9:44
 */

namespace src\pattern\singleton;

/**
 * 单例模式
 */
$ins = Singleton::getInstance();
$ins->doSomeThing();


$ins2 = Singleton::getInstance();
$ins2->doSomeThing();

$ins3 = Singleton::getInstance();
$ins3->doSomeThing();

var_dump($ins === $ins2);
var_dump($ins2 === $ins3);
