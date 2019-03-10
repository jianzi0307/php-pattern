<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/29
 * Time: 11:20
 */

namespace src\pattern\flyweight\object;

/**
 * 棋子抽象类
 * @package src\pattern\flyweight\object
 */
abstract class AbstractChessman
{
    protected $chess;

    protected $posX;
    protected $posY;

    function __construct($chess)
    {
        $this->chess = $chess;
    }

    public function show(): void
    {
        print $this->chess . ' 位置：(' . $this->getPosX() . ', ' . $this->getPosY() . ')' . PHP_EOL;
    }

    /**
     * @return mixed
     */
    public function getPosX(): int
    {
        return $this->posX;
    }

    /**
     * @return mixed
     */
    public function getPosY(): int
    {
        return $this->posY;
    }

    /**
     * @param mixed $posX
     */
    public function setPosX(int $posX): void
    {
        $this->posX = $posX;
    }

    /**
     * @param mixed $posY
     */
    public function setPosY(int $posY): void
    {
        $this->posY = $posY;
    }

    /**
     * 设置位置
     * @param int $x
     * @param int $y
     */
    public function setLocation(int $x, int $y): void
    {
        $this->setPosX($x);
        $this->setPosY($y);
        $this->show();
    }
}