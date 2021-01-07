<?php

namespace Test\Test;

class MakePDF
{
    public $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function make()
    {
        return '这是一个生成pdf方法。' . $this->filename;
    }
}