<?php
namespace PHPUnitSchulung;

interface FileReaderInterface {
    /**
     * @throws FileAccessException
     */
    public function getFileContent($contentPath);
    public function printFile($filePath);
}