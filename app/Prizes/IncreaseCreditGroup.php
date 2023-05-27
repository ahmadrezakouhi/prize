<?php

namespace App\Prizes;

class IncreaseCreditGroup extends PrizeGroup
{
    public function items()
    {
        return array(
            new IncreaseCredit('text', 'currency', 'price', 'مبلغ'),
            new IncreaseCredit('text', 'date', 'dveDate', 'تاریخ انقضا')
        );
    }
}
