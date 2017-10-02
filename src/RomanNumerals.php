<?php

namespace Kata;

class RomanNumerals
{
    private static $mapping = array(
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I',
    );

    public static function convert($arabic)
    {
        $roman = '';

        foreach (self::$mapping as $value => $symbol) {
            while ($arabic >= $value) {
                $roman .= $symbol;
                $arabic -= $value;
            }   
        }

        return $roman;
    }
}