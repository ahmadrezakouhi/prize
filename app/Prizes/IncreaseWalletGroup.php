<?php
namespace App\Prizes ;

class IncreaseWalletGroup extends PrizeGroup {

    public function items()
    {
        return array(new IncreaseWallet('text','currency','price','مبلغ'));
    }
}
