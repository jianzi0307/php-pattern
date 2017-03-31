<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/30
 * Time: 9:59
 */

require ('../../loader/autoload.php');

/**
 * 代理模式
 */
$factory  = new \com\pattern\proxy\RedWineFactory();
$proxy = new \com\pattern\proxy\RedWineProxy($factory);
$proxy->product();
$proxy->sell();