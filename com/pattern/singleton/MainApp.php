<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/27
 * Time: 9:44
 */

require('../loader/autoload.php');

$ins = \com\pattern\singleton\Singleton::getInstance();
$ins->doSomeThing();


$ins2 = \com\pattern\singleton\Singleton::getInstance();
$ins2->doSomeThing();

$ins3 = \com\pattern\singleton\Singleton::getInstance();
$ins3->doSomeThing();

var_dump($ins === $ins2);
var_dump($ins2 === $ins3);
