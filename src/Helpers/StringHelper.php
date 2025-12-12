<?php
namespace App\Helpers;

class StringHelper
{
        public static function getLettersLowercase($str) {
        $str = strtolower($str);
        $result = '';
        for ($i = 0; $i < strlen($str); $i++) {
            $char = $str[$i];
            if ($char >= 'a' && $char <= 'z') {
                $result .= $char;
            }
        }
        return $result;
    }
}
