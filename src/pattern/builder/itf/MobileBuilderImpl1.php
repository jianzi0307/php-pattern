<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/24
 * Time: 15:42
 */

namespace src\pattern\builder\itf;


use src\pattern\builder\base\AbstractBasePackage;
use src\pattern\builder\model\MobilePackage;

/**
 * 手机套餐1的实现
 * @package src\pattern\builder\itf
 */
class MobileBuilderImpl1 extends AbstractBasePackage implements IMobileBuilder
{
    public function buildMoney(): void
    {
        $this->mobilePackage->setMoney(20);
    }

    public function buildSms(): void
    {
        $this->mobilePackage->setSms(200);
    }

    public function buildMusic(): void
    {
        $this->mobilePackage->setMusic('天使');
    }

    public function getMobilePackage(): MobilePackage
    {
        return $this->mobilePackage;
    }
}