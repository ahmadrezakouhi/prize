<?php

namespace App\Prizes;

class RandomIncreaseCreditGroup extends PrizeGroup
{
    public function items()
    {
        return array(
            new RandomIncreaseCredit('text', 'currency', 'minPrice', 'حداقل مبلغ'),
            new RandomIncreaseCredit('text', 'currency', 'maxPrice', 'حداکثر مبلغ'),
            new RandomIncreaseCredit('text', 'date', 'dveDate', 'تاریخ انقضا')
        );
    }
}
