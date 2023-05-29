<?php

namespace App\Prizes;

class IncreaseCreditGroup extends PrizeGroup
{
    public function items()
    {
        return[
            new IncreaseCredit('text', 'currency', 'price', 'مبلغ'),
            new IncreaseCredit('text', 'date', 'dveDate', 'تاریخ انقضا')
        ];
    }
}
