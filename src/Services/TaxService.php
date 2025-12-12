<?php
namespace App\Services;

class TaxService
{
    public function applyTax($amount, $rate)
    {
        return $amount * (1 + $rate);
    }
}
