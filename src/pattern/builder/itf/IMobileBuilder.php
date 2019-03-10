<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/24
 * Time: 14:57
 */

namespace src\pattern\builder\itf;
use src\pattern\builder\model\MobilePackage;

/**
 * 手机套餐的建造接口
 * @package src\pattern\builder\itf
 */
interface IMobileBuilder
{
    /**
     * 建造手机套餐的话费
     */
    public function buildMoney():void;

    /**
     * 建造手机套餐的短信
     */
    public function buildSms():void;

    /**
     * 建造手机套餐的彩铃
     */
    public function buildMusic():void;

    /**
     * 返回建造的手机套餐对象
     *
     * ：构造对象和获得对象分离，建造者的要义就在这里
     * @return MobilePackage
     */
    public function getMobilePackage():MobilePackage;
}