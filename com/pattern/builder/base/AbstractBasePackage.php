<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/24
 * Time: 15:39
 */

namespace com\pattern\builder\base;


use com\pattern\builder\model\MobilePackage;

abstract class AbstractBasePackage
{
    protected $mobilePackage;

    function __construct()
    {
        $this->mobilePackage = new MobilePackage();
    }
}