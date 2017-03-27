<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/27
 * Time: 17:49
 */

namespace com\pattern\decorator\button;


use com\pattern\decorator\base\Component;

class SizeDecrorator extends Component
{
    protected $component;
    protected $size;

    function __construct(Component $component)
    {
        $this->component = $component;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    public function operation()
    {
        print $this->getSize() . $this->component->operation();
    }
}