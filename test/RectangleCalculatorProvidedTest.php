<?php
use PHPUnit\Framework\TestCase;
use PHPUnitSchulung\RectangleCalculator;

class RectangleCalculatorProvidedTest extends TestCase
{

 public function testInitiateClass() {
    $rectangleCalculator = new RectangleCalculator();
    $this->assertInstanceOf('PHPUnitSchulung\RectangleCalculator', $rectangleCalculator);
 }  

 /**
  * @dataProvider providerRectangleDataArray
  */
 public function testCalculateRectangleAreaDataProvider($sideA, $sideB, $expectedResult) {
     $rectangleCalculator = new RectangleCalculator();
     $actualResult = $rectangleCalculator->calculateArea($sideA, $sideB);
     $this->assertEquals($expectedResult ,$actualResult, "calcualate $sideA, $sideB ");
 }

 public function providerRectangleDataArray() {
      return [
         [1, 1 ,1],
         [1, 2, 2],
         [2, 3, 6],
         [2.2, 4.2, 9.24],
         [9, 9, 81],
         [25, 72837.182, 1820929.55]
      ];
 }


/**
  * @dataProvider providerRectangleDataNamedArray
  */
public function testCalculateRectangleAreaDataProviderNamed($sideA, $sideB, $expectedResult) {
   $rectangleCalculator = new RectangleCalculator();
   $actualResult = $rectangleCalculator->calculateArea($sideA, $sideB);
   $this->assertEquals($expectedResult ,$actualResult, "calcualate $sideA, $sideB ");
}

public function providerRectangleDataNamedArray() {
   return [
      'Living Room' => [5,4,20],
      'Bedroom' => [5.40,2.10, 11.34],
      'Bathroom' => [2.20,2, 4.40]
   ];
}



/**
  * @dataProvider providerRectangleCsv
  */
public function testCalculateRectangleCsvProvider($sideA, $sideB, $expectedResult) {
   $rectangleCalculator = new RectangleCalculator();
   $actualResult = $rectangleCalculator->calculateArea($sideA, $sideB);
   $this->assertEquals($expectedResult ,$actualResult, "calcualate $sideA, $sideB ");
}
/**
 * 
 */
public function providerRectangleCsv() {
   $array = array_map('str_getcsv', file(__DIR__.'/ProvidedData.csv'));
   return $array;
   // Recommended way of the documentation 
   //https://phpunit.readthedocs.io/en/9.3/writing-tests-for-phpunit.html?highlight=dataProvider#data-providers
   // example code from phpunit return new CsvFileIterator('data.csv');
}

/**
  * @dataProvider providerRectangleCsv
  * @dataProvider providerRectangleDataNamedArray
  * @dataProvider providerRectangleDataArray
  */
public function testMultipleDataProviders($sideA, $sideB, $expectedResult) {
   $rectangleCalculator = new RectangleCalculator();
   $actualResult = $rectangleCalculator->calculateArea($sideA, $sideB);
   $this->assertEquals($expectedResult ,$actualResult, "calcualate $sideA, $sideB ");
}

// more providers 
// - combination of @depends and provider 



}