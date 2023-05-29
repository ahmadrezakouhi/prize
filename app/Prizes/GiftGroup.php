<?php

namespace App\Prizes;

class GiftGroup extends PrizeGroup
{

    public function items()
    {
        return [new Gift('list', 'numeric', 'id', 'شناسه', GiftType::convertToArray())];
    }
}
