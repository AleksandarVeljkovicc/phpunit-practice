<?php
use PHPUnit\Framework\TestCase;
use App\Models\Order;
use App\Models\Product;
use App\Models\Invoice;

class InvoiceTest extends TestCase
{
    public function testTotalWithTax() {
        $order = new Order();
        $order->addProduct(new Product("A",100));
        $invoice = new Invoice($order, 0.2);
        $this->assertEquals(120, $invoice->getTotalWithTax());
    }
}
