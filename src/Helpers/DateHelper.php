<?php
namespace App\Helpers;

class DateHelper
{
    public static function formatDate($date, $format="Y-m-d")
    {
        $d = new \DateTime($date);
        return $d->format($format);
    }

    public static function isPast($date)
    {
        $d = new \DateTime($date);
        return $d < new \DateTime();
    }
}
