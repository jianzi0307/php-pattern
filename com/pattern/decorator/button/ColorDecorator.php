<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/27
 * Time: 17:43
 */

namespace com\pattern\decorator\button;


use com\pattern\decorator\base\Component;

class ColorDecorator extends Component
{
    private $component;
    private $color;

    function __construct(Component $component)
    {
        $this->component = $component;
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

    public function operation()
    {
        print $this->getColor() . $this->component->operation() ;
    }
}