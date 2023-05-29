<?php

namespace App\Http\Controllers;

use App\Prizes\GiftGroup;
use App\Prizes\Prize;
use App\Prizes\PrizeType;
use App\Repositories\PrizeInterface;
use Illuminate\Http\Request;

class PrizeController extends Controller
{

    private $prize;

    public function __construct(PrizeInterface $prize)
    {
        $this->prize = $prize;
    }

    public function index()
    {
        // $prizes = array_column(PrizeType::cases(),'name','value');
        return $this->prize->all();
    }


    public function show($id)
    {
        return $this->prize->find($id);
    }
}
