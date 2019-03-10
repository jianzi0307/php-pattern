<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/27
 * Time: 9:39
 */

namespace src\pattern\singleton;


class Singleton
{
    private static $_instance;

    /**
     * 不允许外部实例化
     */
    private function __construct()
    {
        print "-- 获取实例".PHP_EOL;
    }

    public static function getInstance():Singleton
    {
        if (!self::$_instance instanceof Singleton) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function doSomeThing()
    {
        print __METHOD__.PHP_EOL;
    }

    /**
     * 不允许复制
     */
    private function __clone()
    {
    }
}