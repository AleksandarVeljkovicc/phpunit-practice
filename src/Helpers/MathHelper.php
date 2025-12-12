<?php
namespace App\Helpers;

class MathHelper
{
    public static function add($a, $b)
    {
        return $a + $b;
    }

    public static function multiply($a, $b)
    {
        return $a * $b;
    }

    public static function divide($a, $b)
    {
        if ($b == 0) {
            return $a . " / " . $b . " = Cannot divide by zero";
        }
        return $a / $b;
    }
}
