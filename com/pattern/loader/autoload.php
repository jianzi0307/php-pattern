<?php

function __autoload($class)
{
    $file = str_replace("\\", '/', $class);
    require(dirname(__FILE__).'/../../../'.$file.'.php');
}