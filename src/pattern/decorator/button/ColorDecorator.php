<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/27
 * Time: 17:43
 */

namespace src\pattern\decorator\button;


use src\pattern\decorator\base\Component;

class ColorDecorator extends Decorator
{
    protected $color;

    function __construct(Component $component)
    {
        parent::__construct($component);
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    public function beforeOperation()
    {
        print $this->getColor();
    }

    public function afterOperation()
    {
        print PHP_EOL;
    }

    public function operation()
    {
        $this->beforeOperation();
        parent::operation();
        $this->afterOperation();
    }
}