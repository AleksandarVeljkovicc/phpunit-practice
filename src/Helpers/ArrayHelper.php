<?php
namespace App\Helpers;

class ArrayHelper
{
    public static function sumArray(array $arr)
    {
         $sum = 0;
         foreach ($arr as $value) {
             $sum += $value;
         }
         return $sum;
    }

    public static function maxArray(array $arr)
    {
        if (empty($arr)) {
            return "Array is empty, cannot find maximum";
        }

        $max = $arr[0];
        foreach ($arr as $value) {
            if ($value > $max) $max = $value;
        }
        return $max;
    }

}
