<?php
namespace App\Models;

class Invoice
{
    public $order;
    public $taxRate;

    public function __construct(Order $order, $taxRate=0.2)
    {
        $this->order = $order;
        $this->taxRate = $taxRate;
    }

    public function getTotalWithTax()
    {
        return $this->order->getTotal() * (1 + $this->taxRate);
    }
}
