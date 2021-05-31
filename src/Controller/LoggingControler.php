<?php

namespace Training\Controller;

use Omedia\files\FileJson;
use Omedia\files\FileTxt;
use Omedia\files\FileXml;

class LoggingController
{
    protected  $fileWriter;
    protected  $fileWriterTxt;

    public function __construct(FileJson $fileJson, FileTxt $fileTxt)
    {
        $this->fileWriter = $fileJson;

    }

    public function logMessage()
    {
        $this->fileWriter->read();
    }
}