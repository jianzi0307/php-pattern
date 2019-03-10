<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/23
 * Time: 10:19
 */

namespace src\pattern\ioc;

use src\pattern\ioc\itf\IDriverWriter;

class Business
{
    private $writer;

    function __construct(IDriverWriter $writer)
    {
        $this->writer = $writer;
    }

    public function setWriter(IDriverWriter $writer):void
    {
        $this->writer = $writer;
    }

    public function save():void
    {
        $this->writer->saveToDriver();
    }
}