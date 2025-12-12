<?php
use PHPUnit\Framework\TestCase;
use App\Helpers\ArrayHelper;

class ArrayHelperTest extends TestCase
{
    public function testSumArray() { $this->assertEquals(6, ArrayHelper::sumArray([1,2,3])); }

    public function testMaxArrayNormal()
    {
        $this->assertEquals(5, ArrayHelper::maxArray([1, 3, 5, 2]));
        $this->assertEquals(10, ArrayHelper::maxArray([10, 2, 7, 1]));
    }

    public function testMaxArraySingleElement()
    {
        $this->assertEquals(7, ArrayHelper::maxArray([7]));
    }

    public function testMaxArrayEmpty()
    {
        $this->assertEquals("Array is empty, cannot find maximum", ArrayHelper::maxArray([]));
    }

    public function testMaxArrayNegativeNumbers()
    {
        $this->assertEquals(-1, ArrayHelper::maxArray([-5, -10, -1, -3]));
    }
}
