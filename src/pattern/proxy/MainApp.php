<?php

require_once '../../../vendor/autoload.php';

use src\pattern\proxy\RedWineFactory;
use src\pattern\proxy\RedWineProxy;

/**
 * 代理模式
 */
$factory = new RedWineFactory();
$proxy = new RedWineProxy($factory);
$proxy->product();
$proxy->sell();
