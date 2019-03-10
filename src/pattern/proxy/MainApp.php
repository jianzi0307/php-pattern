<?php

namespace src\pattern\proxy;

/**
 * User: jian0307@icloud.com
 * Date: 2017/3/30
 * Time: 9:59
 */


/**
 * 代理模式
 */
$factory = new RedWineFactory();
$proxy = new RedWineProxy($factory);
$proxy->product();
$proxy->sell();