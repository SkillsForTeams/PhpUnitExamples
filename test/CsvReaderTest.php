<?php 
use PHPUnit\Framework\TestCase;
use PHPUnitSchulung\FileReader; 
use PHPUnitSchulung\CsvReader;


class CsvReaderTest extends TestCase
{


    public function testGetFileAsArray() {
        $fileReader = new FileReader();
        $csvReader = new CsvReader($fileReader);

        $csvAsArray = $csvReader->getFileAsArray(__DIR__.'/ProvidedData.csv');
       // var_dump($csvAsArray);
        $this->assertContains(["1","1","1"], $csvAsArray);
        //$this->assertContains([1,1,1], $csvAsArray);
        
    }

    public function testGetFileAsArrayWitStub() {
        $fileReaderStub = $this->createStub(FileReader::class);

        // Configure the stub.
        $fileReaderStub->method('getFileContent')
             ->willReturn("apfel,birne,banane".PHP_EOL."auto,fahrrad,trike");
        $csvReader = new CsvReader($fileReaderStub); 
        $csvAsArray = $csvReader->getFileAsArray(__DIR__.'/bullshitfile');
        // var_dump($csvAsArray);
         $this->assertContains(["apfel","birne","banane"], $csvAsArray);

    }

    public function testGetFileAsArrayWrongFile(){
        $fileReaderStub = $this->createStub(FileReader::class);

        // Configure the stub to throw an exception
        $fileReaderStub->method('getFileContent')
            ->will($this->throwException(new PHPUnitSchulung\FileAccessException));
    
        $csvReader = new CsvReader($fileReaderStub); 
        $this->expectException(PHPUnitSchulung\FileAccessException::class); 
        $csvAsArray = $csvReader->getFileAsArray(__DIR__.'/iAmNotHere');  
    }


    /**
     * Mock objects can be used to observe the class behavior
     */
    public function testGetFileAsArrayWitMock() {
        $fileReaderMock = $this->createMock(FileReader::class);

        //Configure the Mock to expect to be called 
    
        $fileReaderMock->expects($this->once())
                        ->method('getFileContent')
                        ->with(__DIR__.'/bullshitfile');
                      
        $csvReader = new CsvReader($fileReaderMock); 
        $csvAsArray = $csvReader->getFileAsArray(__DIR__.'/bullshitfile');
        
    }
    
    

}

?>
