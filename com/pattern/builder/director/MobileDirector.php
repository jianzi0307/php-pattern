<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/24
 * Time: 15:54
 */

namespace com\pattern\builder\director;

use com\pattern\builder\itf\IMobileBuilder;
use com\pattern\builder\model\MobilePackage;

/**
 * 手机套餐指导者，大厅营业员
 * @package com\pattern\builder\director
 */
class MobileDirector
{
    public function createMobilePackage(IMobileBuilder $mobileBuilder):MobilePackage
    {
        if (null != $mobileBuilder) {
            $mobileBuilder->buildMoney();
            $mobileBuilder->buildMusic();
            $mobileBuilder->buildSms();

            return $mobileBuilder->getMobilePackage();
        }
        return null;
    }
}