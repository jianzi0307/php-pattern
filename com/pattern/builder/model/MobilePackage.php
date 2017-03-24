<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/24
 * Time: 14:43
 */

namespace com\pattern\builder\model;

/**
 * 手机套餐
 * @package com\pattern\builder\model
 */
class MobilePackage
{
    /**
     * 话费
     * @var
     */
    private $money;

    /**
     * 短信
     * @var
     */
    private $sms;

    /**
     * 彩铃
     * @var
     */
    private $music;

    /**
     * @return mixed
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * @param mixed $money
     */
    public function setMoney($money)
    {
        $this->money = $money;
    }

    /**
     * @return mixed
     */
    public function getSms()
    {
        return $this->sms;
    }

    /**
     * @param mixed $sms
     */
    public function setSms($sms)
    {
        $this->sms = $sms;
    }

    /**
     * @return mixed
     */
    public function getMusic()
    {
        return $this->music;
    }

    /**
     * @param mixed $music
     */
    public function setMusic($music)
    {
        $this->music = $music;
    }
}
