<?php
use PHPUnit\Framework\TestCase;
use App\Models\Person;

class PersonTest extends TestCase
{
    public function testIsAdult() { 
        $this->assertTrue((new Person("A",20))->isAdult());
        $this->assertFalse((new Person("B",15))->isAdult());
    }
}
