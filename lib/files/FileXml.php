<?php

namespace Omedia\files;
use Omedia\files\FileInterface;

class FileXml implements FileInterface {

    /**
     * File path.
     * 
     * @var string
     */
    protected $path;

    /**
     * File format. Can be: txt, json
     * 
     * @var string|null
     */
    protected $format;

    /**
     * FileTxt constructor
     * @param string $path
     * @param string|null $format
     */
    public function __construct(string $path = null, string $format = null)
    {

        $this->path = $path;
        $this->format = $format;
    }


    public function read()
    {
        print "Reading from Xml file \n";
    }

    public function write($data)
    {
        print "Writing to Xml file \n";
    }
}