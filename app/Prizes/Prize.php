<?php

namespace App\Prizes;

abstract class Prize
{
    public $type;
    public $valueType;
    public $name;
    public $label;

    public function __construct($type, $valueType, $name, $label)
    {
        $this->type = $type;
        $this->valueType = $valueType;
        $this->name = $name;
        $this->label = $label;
    }
}
