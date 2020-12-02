<?php
namespace PHPUnitSchulung;
use PHPUnitSchulung\FileReaderInterface;

class CsvReader {

    private FileReaderInterface $fileReader;
    
    public function __construct(FileReaderInterface $fileReader)
    {
        $this->fileReader = $fileReader; 
    }

    public function getFileAsArray($filePath)
    {
        //$array = array_map('str_getcsv', file($filePath));
        $content = $this->fileReader->getFileContent($filePath);
        $array = array_map('str_getcsv', explode(PHP_EOL, $content));
        return $array;
    }
}

