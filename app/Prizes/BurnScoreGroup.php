<?php

namespace App\Prizes;

class BurnScoreGroup extends PrizeGroup
{
    public function items()
    {
        return array(new BurnScore('text', 'percent', 'percent', 'درصد'));
    }
}
