<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/27
 * Time: 18:11
 */

namespace com\pattern\decorator\button;


use com\pattern\decorator\base\Component;

abstract class Decorator extends Component
{
    protected $component;

    function __construct(Component $component)
    {
        $this->component = $component;
    }

    abstract function beforeOperation();
    abstract function afterOperation();

    public function operation()
    {
        $this->component->operation();
    }
}