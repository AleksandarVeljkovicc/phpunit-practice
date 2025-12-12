<?php
namespace App\Services;

use App\Models\Order;
use App\Services\PriceService;

class OrderService
{
    private $priceService;

    public function __construct(PriceService $priceService)
    {
        $this->priceService = $priceService;
    }

    public function calculateOrderTotal(Order $order, $tax=0)
    {
        $sum = $order->getTotal();
        return $this->priceService->calculateTotal($sum, 1, $tax);
    }
}
