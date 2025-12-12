<?php
use PHPUnit\Framework\TestCase;
use App\Helpers\StringHelper;

class StringHelperTest extends TestCase
{
          public function testLettersOnlyLowercaseNormal()
    {
        $this->assertEquals("helloworld", StringHelper::getLettersLowercase("Hello, World! 123@!-"));
    }

    public function testLettersOnlyLowercaseAllCaps()
    {
        $this->assertEquals("abcdef", StringHelper::getLettersLowercase("ABCDEF"));
    }

    public function testLettersOnlyLowercaseEmpty()
    {
        $this->assertEquals("", StringHelper::getLettersLowercase(""));
    }
}
