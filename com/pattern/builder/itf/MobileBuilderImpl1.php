<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/24
 * Time: 15:42
 */

namespace com\pattern\builder\itf;


use com\pattern\builder\base\AbstractBasePackage;
use com\pattern\builder\model\MobilePackage;

/**
 * 手机套餐1的实现
 * @package com\pattern\builder\itf
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