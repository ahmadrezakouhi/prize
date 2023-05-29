<?php

namespace App\Prizes;

enum GiftType: int
{
    use ConvertToArrayFormat;
    case Gift1 = 1;
    case Gift2 = 2;
}
