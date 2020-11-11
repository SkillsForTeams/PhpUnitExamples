<?php
use PHPUnit\Framework\TestCase;
use PHPUnitSchulung\SquareCalculator;

class SquareCalculatorTest extends TestCase
{

 public function testInitiateClass() {
    $squareCalculator = new SquareCalculator();
    $this->assertInstanceOf('PHPUnitSchulung\SquareCalculator', $squareCalculator);
 }  

 public function testCalculateSquareFor2x2() {
     $squareCalculator = new SquareCalculator();
     $actualResult = $squareCalculator->calculateSquare(2);
     $this->assertEquals(4,$actualResult, "calculate a 4m square");
 }

 public function testCalculateSquareForhalv() {
    $squareCalculator = new SquareCalculator();
    $actualResult = $squareCalculator->calculateSquare(0.5);
    $this->assertEquals(0.25 ,$actualResult, "calculate a 0.5 square");

 }



}