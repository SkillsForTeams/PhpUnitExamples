<?php
use PHPUnit\Framework\TestCase;

class AssertTest extends TestCase
{
    public function testVerySimpleAssert()
    {
        
        $actual = 1+1;
        $expected = 2;      
        $this->assertEquals($expected, $actual, "this is just assert demo");
       
    }

    public function testVerySimpleAssertTrue()
    {
      
     
        $actual = true;      
        $this->assertTrue($actual, "this is just assert demo");
       
    }
}