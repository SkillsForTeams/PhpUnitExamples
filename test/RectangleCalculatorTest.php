<?php
use PHPUnit\Framework\TestCase;
use PHPUnitSchulung\RectangleCalculator;

class RectangleCalculatorTest extends TestCase
{

 public function testInitiateClass() {
    $rectangleCalculator = new RectangleCalculator();
    $this->assertInstanceOf('PHPUnitSchulung\RectangleCalculator', $rectangleCalculator);
 }  

 public function testCalculateRectangleFor4x2() {
  
     $rectangleCalculator = new RectangleCalculator();
     $actualResult = $rectangleCalculator->calculateArea(4,2);
     $this->assertEquals(8,$actualResult, "calculate a 4m area");
 }

 public function testCalculateSquareForhalv() {
  
    $rectangleCalculator = new RectangleCalculator();
    $actualResult = $rectangleCalculator->calculateArea(0.5, 1);
    $this->assertEquals(0.5 ,$actualResult, "calculate a 0.5 area");
 }



}