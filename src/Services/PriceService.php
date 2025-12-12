<?php
namespace App\Services;

class PriceService
{
    public function calculateTotal($price, $quantity, $tax = 0)
    {
        if ($quantity < 0) {
            return "Quantity cannot be negative";
        }

        $total = $price * $quantity * (1 + $tax);
        return round($total, 2);
    }
}
