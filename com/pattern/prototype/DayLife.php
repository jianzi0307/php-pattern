<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/24
 * Time: 17:41
 */

namespace com\pattern\prototype;


class DayLife
{
    private $wakeup;

    function __construct()
    {
        print " 新的一天===>" . PHP_EOL;
    }

    public function printMessage()
    {
        print "今天" . $this->getWakeup() . "起床 ...... 一天过去了 " . PHP_EOL;
    }

    /**
     * @param mixed $wakeup
     */
    public function setWakeup($wakeup)
    {
        $this->wakeup = $wakeup;
    }

    /**
     * @return mixed
     */
    public function getWakeup()
    {
        return $this->wakeup;
    }
}