<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/27
 * Time: 17:49
 */

namespace com\pattern\decorator\button;


use com\pattern\decorator\base\Component;

class SizeDecrorator extends Decorator
{
    protected $size;

    function __construct(Component $component)
    {
        parent::__construct($component);
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    public function beforeOperation()
    {
        print $this->getSize();
    }

    public function afterOperation()
    {
        print PHP_EOL;
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
        $this->beforeOperation();
        parent::operation();
        $this->afterOperation();
    }
}