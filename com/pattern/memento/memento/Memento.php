<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/30
 * Time: 12:45
 */

namespace com\pattern\memento\memento;

/**
 * 备忘录
 * @package com\pattern\memento\memento
 */
class Memento
{
    /**
     * 血液值
     * @var
     */
    private $blood;

    /**
     * 武力值
     * @var
     */
    private $sword;

    function __construct(int $blood, int $sword)
    {
        $this->blood = $blood;
        $this->sword = $sword;
    }

    /**
     * @return mixed
     */
    public function getBlood()
    {
        return $this->blood;
    }

    /**
     * @return mixed
     */
    public function getSword()
    {
        return $this->sword;
    }
}
