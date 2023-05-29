<?php

namespace App\Repositories;

use App\Prizes\GiftGroup;
use App\Prizes\PrizeType;

class PrizeRepository implements PrizeInterface
{
    private $namespace = 'App\Prizes\\';
    private $prefix = 'Group';
    public function all()
    {
        $prizes = [];
        foreach (PrizeType::cases() as $case) {
            $prizes[]=['id'=>$case->value,'title'=>$case->name];
        }
        return $prizes;
    }
    public function find($id)
    {
        $className = (PrizeType::from($id))->name;
        $class = $this->namespace.$className.$this->prefix;
        return (new $class())->items();
    }
}
