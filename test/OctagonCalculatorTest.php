<?php
use PHPUnit\Framework\TestCase;
use PHPUnitSchulung\OctagonCalculator; 

class OctagonCalculatorTest extends TestCase {
    
    public function testInitiateClass() {

        $octagonClass = new OctagonCalculator(5);
        $this->assertTrue(true);
        $this->assertInstanceOf("PHPUnitSchulung\OctagonCalculator", $octagonClass);

    }

    public function testCalculatePremiterWithSideLength10() {
        
        $octagonCalculator = new OctagonCalculator(10);
        $perimeter = $octagonCalculator->getPerimeter();
        $this->assertEquals(80, $perimeter);

    }

    public function testCalculatePremiterWithSideLength20() {
        
        $octagonCalculator = new OctagonCalculator(20);
        $perimeter = $octagonCalculator->getPerimeter();
        $this->assertEquals(160, $perimeter);

    }
    public function testCalculatePremiterWithSideLength5() {
        
        $octagonCalculator = new OctagonCalculator(5);
        $perimeter = $octagonCalculator->getPerimeter();
        $this->assertEquals(40, $perimeter);

    }

    public function testCalculateAreaWithSideLength10() {
    
        $octagonCalculator = new OctagonCalculator(10);
        $area = $octagonCalculator->getArea();
        $this->assertEquals(482.8, $area);
    }

    public function testCalculateAreaWithSideLength5() {
    
        $octagonCalculator = new OctagonCalculator(5);
        $area = $octagonCalculator->getArea();
        $this->assertEquals(120.7, $area);
    }




}