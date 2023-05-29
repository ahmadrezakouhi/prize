<?php

namespace App\Prizes;

abstract class Prize
{
    public $type;
    public $valueType;
    public $name;
    public $label;
    public $items;
    public function __construct($type, $valueType, $name, $label ,$items = [])
    {
        $this->type = $type;
        $this->valueType = $valueType;
        $this->name = $name;
        $this->label = $label;
        $this->items = $items;
    }
}
