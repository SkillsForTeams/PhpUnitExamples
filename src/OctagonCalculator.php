<?php 
namespace PHPUnitSchulung;

class OctagonCalculator {
    private $sideLength = 0;
    private $areaRoundPrecision = 1;
    
    public function __construct($sideLength) {
        $this->sideLength = $sideLength;
    }

    public function getPerimeter() {
        return 8*$this->sideLength;
    }

    public function getArea() {
        $result =  (2 * (1 + sqrt(2)) *
        $this->sideLength * $this->sideLength);
        return round($result, $this->areaRoundPrecision);
    }

}