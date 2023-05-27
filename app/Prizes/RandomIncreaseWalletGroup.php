<?php

namespace App\Prizes;

class RandomIncreaseWalletGroup extends PrizeGroup
{
    public function items()
    {
        return array(
            new RandomIncreaseWallet('text', 'currency', 'minPrice', 'حداقل مبلغ'),
            new RandomIncreaseWallet('text', 'currency', 'minPrice', 'حداکثر مبلغ')
        );
    }
}
