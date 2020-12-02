<?php
namespace PHPUnitSchulung;
use PHPUnitSchulung\FileReaderInterface;

class FileReader implements FileReaderInterface {
    /**
     * @throws FileAccessException
     */
    public function getFileContent($filePath) {
        if(!file_exists($filePath)) throw new FileAccessException("File $filePath not exists", 1);
        $content =  file_get_contents($filePath);
        if($content == "") throw new FileAccessException("File $filePath is empty", 2);
        return $content;
    }

    public function printFile($filePath) {
        echo $this->getFileContent($filePath);
    }
}