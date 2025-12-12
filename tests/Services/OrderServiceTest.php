<?php
use PHPUnit\Framework\TestCase;
use App\Services\OrderService;
use App\Services\PriceService;
use App\Models\Order;
use App\Models\Product;

class OrderServiceTest extends TestCase
{
    public function testCalculateOrderTotal() {
        $order = new Order();
        $order->addProduct(new Product("A",50));
        $order->addProduct(new Product("B",50));

        $priceService = new PriceService();
        $service = new OrderService($priceService);

        $this->assertEquals(120, $service->calculateOrderTotal($order,0.2));
    }
}
