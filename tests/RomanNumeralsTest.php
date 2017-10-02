<?php

namespace Kata\Tests;

use Kata\RomanNumerals;

class RomanNumeralsTest extends \PHPUnit_Framework_TestCase
{
    private $testData = array(
        1 => 'I',
        2 => 'II',
        3 => 'III',
        4 => 'IV',
        5 => 'V',
        6 => 'VI',
        7 => 'VII',
        8 => 'VIII',
        9 => 'IX',
        10 => 'X',
        11 => 'XI',
        12 => 'XII',
        15 => 'XV',
        20 => 'XX',
        30 => 'XXX',
        40 => 'XL',
        41 => 'XLI',
        44 => 'XLIV',
        50 => 'L',
        90 => 'XC',
        100 => 'C',
        400 => 'CD',
        500 => 'D',
        900 => 'CM',
        1000 => 'M',
    );

    public function testConversion()
    {
        foreach ($this->testData as $arabic => $roman) {
            $this->assertEquals($roman, RomanNumerals::convert($arabic));
        }
    }
}