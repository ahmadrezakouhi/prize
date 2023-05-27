<?php
namespace App\Prizes;
class GiftGroup extends PrizeGroup{

    public function items(){
        return array(new Gift('list','numeric','id','شناسه'),'items'=>GiftType::cases());
    }

}
