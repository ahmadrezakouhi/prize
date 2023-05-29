<?php

namespace App\Prizes;

trait ConvertToArrayFormat
{
    public static function convertToArray()
    {
        $prizes = [];
        foreach (self::cases() as $case) {
            $prizes[] = ['id' => $case->value, 'title' => $case->name];
        }

        return $prizes;
    }
}
