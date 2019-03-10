<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/29
 * Time: 9:25
 */

namespace src\pattern\facade;


class CookFacade implements ICookFacade
{
    private $sourSweetFish;

    function __construct()
    {
        $this->sourSweetFish = new SourSweetFish();
    }

    public function cookSourSweetFish(): void
    {
        print "开始做糖醋鲤鱼...".PHP_EOL;
        $this->sourSweetFish->prepare();
        $this->sourSweetFish->step1();
        $this->sourSweetFish->step2();
        $this->sourSweetFish->step3();
        $this->sourSweetFish->step4();
        $this->sourSweetFish->step5();
        $this->sourSweetFish->end();
        print "糖醋鲤鱼出锅...".PHP_EOL;
    }
}