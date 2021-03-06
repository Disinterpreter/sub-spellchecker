<?php

namespace models;

class SubFile
{
    public $name;
    public $type;
    public $size;
    public $path;
    public $extension;

    public function __construct($name, $type, $size, $path)
    {
        $this->name = $name;
        $this->type = $type;
        $this->size = $size;
        $this->path = $path;
        $this->extension = pathinfo($name)['extension'];
    }
}