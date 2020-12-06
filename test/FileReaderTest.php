<?php
use PHPUnit\Framework\TestCase;
use PHPUnitSchulung\FileAccessException;
use PHPUnitSchulung\FileReader;

/**
 * @covers FileReader
 */
class FileReaderTest extends TestCase
{

     public function testGetFileContentWithNonExistingFile() {         
        $this->expectException(FileAccessException::class);       
        $fileReader = new FileReader(); 
        $fileReader->getFileContent("/notExists");
        
     }

     
     public function testGetFileContentWithNonExistingFileMessage() {         
        $this->expectException(FileAccessException::class);   
        $this->expectExceptionMessage("File /notExists2 not exists"); 
        $this->expectExceptionCode(1);
        
        $fileReader = new FileReader(); 
        $fileReader->getFileContent("/notExists2");
     }

     public function testGetFileContentWithNonEmptyFileMessage() {         
      $this->expectException(FileAccessException::class);   
      $this->expectExceptionCode(2);
      $fileReader = new FileReader(); 
      $fileReader->getFileContent(__DIR__."/emptyFileExample.txt");
   }
   public function testGetFileContent() {
      $fileReader = new FileReader();
      $fileContent = $fileReader->getFileContent(__DIR__."/example.txt");
      $this->assertEquals("exampleFileContent", $fileContent);

   }
   public function testPrintFileContent() {
      $fileReader = new FileReader(); 
      $this->expectOutputString("exampleFileContent");
      $fileReader->printFile(__DIR__."/example.txt");

   }


}
