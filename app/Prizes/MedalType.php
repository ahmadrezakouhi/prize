<?php

namespace App\Prizes;

enum MedalType: int
{
    use ConvertToArrayFormat;
    case Golden = 1;
    case Silver = 2;
    case Bronze = 3;
}
