<?php
use PHPUnit\Framework\TestCase;
use App\Models\Order;
use App\Models\Product;

class OrderTest extends TestCase
{
    public function testGetTotal() {
        $order = new Order();
        $order->addProduct(new Product("A",10));
        $order->addProduct(new Product("B",15));
        $this->assertEquals(25, $order->getTotal());
    }
}
