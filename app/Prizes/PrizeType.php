<?php

namespace App\Prizes;

enum PrizeType: int
{
    case Gift = 1;
    case IncreaseScore = 2;
    case BurnScore = 3;
    case IncreaseWallet = 4;
    case RandomIncreaseWallet = 5;
    case IncreaseCredit = 6;
    case RandomIncreaseCredit = 7;
    case Medal = 8;
}
