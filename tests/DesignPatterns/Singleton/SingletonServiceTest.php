<?php
use PHPUnit\Framework\TestCase;
use App\DesignPatterns\Singleton\SingletonService;

class SingletonServiceTest extends TestCase
{
    public function testGetInstanceReturnsSameInstance()
    {
        $first = SingletonService::getInstance();
        $second = SingletonService::getInstance();
        $this->assertSame($first, $second);
    }
}
