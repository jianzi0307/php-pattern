<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/27
 * Time: 16:15
 */

namespace src\pattern\bridge\switchs\sub;


use src\pattern\bridge\lights\ILight;
use src\pattern\bridge\switchs\BaseSwitch;

class RemoteControllSwitch extends BaseSwitch
{
    function __construct(ILight $light)
    {
        parent::__construct($light);
    }

    /**
     * 使用遥控开关开灯
     * @param int $color 颜色
     */
    final public function makeRemoteLight(int $color): void
    {
        $this->light->eleConnected();
        $this->light->light();

        $lightColor = '';
        switch ($color) {
            case 1:
                $lightColor = '暖色';
                break;
            case 2:
                $lightColor = '冷色';
                break;
            default:
                $lightColor = '白色';
                break;
        }
        print '现在灯的颜色是：' . $lightColor . PHP_EOL;
        $this->light->eleClosed();
    }
}