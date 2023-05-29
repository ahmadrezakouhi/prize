<?php

namespace App\Prizes;

class MedalGroup extends PrizeGroup
{
    public function items()
    {
        return array(new Medal('list', 'numeric', 'id', 'شناسه',MedalType::convertToArray()));
    }
}
