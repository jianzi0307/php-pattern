<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/27
 * Time: 17:47
 */

namespace com\pattern\decorator\button;


use com\pattern\decorator\base\Component;

class Button extends Component
{
    public function operation()
    {
        print '普通按钮';
    }
}