<?php
use PHPUnit\Framework\TestCase;
use App\Helpers\DateHelper;

class DateHelperTest extends TestCase
{
    public function testFormatDateDefault()
    {
        $this->assertEquals("2025-12-12", DateHelper::formatDate("2025-12-12 14:30"));
    }

    public function testFormatDateCustom()
    {
        $this->assertEquals("12/12/2025", DateHelper::formatDate("2025-12-12 14:30", "d/m/Y"));

        $this->assertEquals("2025-12-12 14:30", DateHelper::formatDate("2025-12-12 14:30", "Y-m-d H:i"));
    }


    public function testIsPast() 
    { 
        $this->assertFalse(DateHelper::isPast('2999-01-01')); 
        $this->assertTrue(DateHelper::isPast('2000-01-01')); 
    }
}
