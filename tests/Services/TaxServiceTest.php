<?php
use PHPUnit\Framework\TestCase;
use App\Services\TaxService;

class TaxServiceTest extends TestCase
{
    public function testApplyTax() {
        $service = new TaxService();
        $this->assertEquals(120, $service->applyTax(100,0.2));
    }
}
