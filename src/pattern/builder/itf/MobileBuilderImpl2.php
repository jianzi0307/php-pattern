<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/24
 * Time: 15:45
 */

namespace src\pattern\builder\itf;


use src\pattern\builder\base\AbstractBasePackage;
use src\pattern\builder\model\MobilePackage;


/**
 * 套餐2的实现
 * @package src\pattern\builder\itf
 */
class MobileBuilderImpl2 extends AbstractBasePackage implements IMobileBuilder
{
    public function buildMoney(): void
    {
        $this->mobilePackage->setMoney(30);
    }

    public function buildSms(): void
    {
        $this->mobilePackage->setSms(400);
    }

    public function buildMusic(): void
    {
        $this->mobilePackage->setMusic('程序猿之歌');
    }

    public function getMobilePackage(): MobilePackage
    {
        return $this->mobilePackage;
    }
}