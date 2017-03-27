<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/27
 * Time: 17:23
 */

namespace com\pattern\composite\base;


abstract class Group extends Worker
{
    abstract public function add(Worker $worker): void;
    abstract public function remove(Worker $worker):void;
}