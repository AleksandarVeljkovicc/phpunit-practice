<?php
use PHPUnit\Framework\TestCase;
use App\Helpers\MathHelper;

class MathHelperTest extends TestCase
{
    public function testAdd() { $this->assertEquals(5, MathHelper::add(2,3)); }
    public function testMultiply() { $this->assertEquals(12, MathHelper::multiply(3,4)); }
    public function testDivide() { $this->assertEquals(2, MathHelper::divide(10,5)); }
    public function testDivideNormal()
    {
        $this->assertEquals(2, MathHelper::divide(10, 5));
        $this->assertEquals(5, MathHelper::divide(25, 5));
    }

    public function testDivideByZero()
    {
        $this->assertEquals( "10 / 0 = Cannot divide by zero", MathHelper::divide(10, 0));
    }
}
