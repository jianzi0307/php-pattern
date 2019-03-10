<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/29
 * Time: 11:24
 */

namespace src\pattern\flyweight\factory;


use src\pattern\flyweight\object\AbstractChessman;
use src\pattern\flyweight\object\BlackChessman;
use src\pattern\flyweight\object\WhiteChessman;

/**
 * 五子棋工厂
 * @package src\pattern\flyweight\factory
 */
class FiveChessmanFactory
{
    private static $_instance;

    private $_cache = [];

    public static function getInstance():FiveChessmanFactory
    {
        if (!self::$_instance instanceof self) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function getChess($key):AbstractChessman
    {
        $absChess = $this->_cache[$key] ?? null;
        if (null == $absChess) {
            switch($key) {
                case 'B':
                    $absChess = new BlackChessman();
                    break;
                case 'W':
                    $absChess = new WhiteChessman();
                    break;
                default:
                    break;
            }
        }
        if (null != $absChess) {
            $this->_cache[$key] = $absChess;
        }
        return $absChess;
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}