<?php
use PHPUnit\Framework\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    public function testFormattedPrice() {
        $p = new Product("Item", 123.456);
        $this->assertEquals('123.46', $p->getFormattedPrice());
    }
}
