<?php
use PHPUnit\Framework\TestCase;
use App\Services\PriceService;

class PriceServiceTest extends TestCase
{
    private $service;

    protected function setUp(): void
    {
        $this->service = new PriceService();
    }

    public function testCalculateTotalNormal()
    {
        $this->assertEquals(200, $this->service->calculateTotal(100, 2));
        $this->assertEquals(240, $this->service->calculateTotal(100, 2, 0.2));
    }

    public function testCalculateTotalWithZeroQuantity()
    {
        $this->assertEquals(0, $this->service->calculateTotal(100, 0));
    }

    public function testCalculateTotalNegativeQuantity()
    {
        $this->assertEquals("Quantity cannot be negative", $this->service->calculateTotal(100, -1));
    }

    public function testCalculateTotalDecimalValues()
    {
        $this->assertEquals(110.55, $this->service->calculateTotal(50.25, 2, 0.1));
    }
}
