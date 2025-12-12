<?php
use PHPUnit\Framework\TestCase;
use App\Services\GreetingService;

class GreetingServiceTest extends TestCase
{
    public function testGreet() {
        $service = new GreetingService();
        $this->assertEquals('Hello, Marko', $service->greet('Marko'));
        $this->assertEquals('Hello, stranger', $service->greet(''));
    }
}
