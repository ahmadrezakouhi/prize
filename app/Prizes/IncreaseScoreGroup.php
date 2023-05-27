<?php

namespace App\Prizes;

class IncreaseScoreGroup extends PrizeGroup
{
    public function items()
    {
        return array(new IncreaseScore('text','numeric','value','مقدار'));
    }
}
