<?php

namespace Omedia\files;
use Omedia\files\FileInterface;


class FileTxt implements FileInterface {

    /**
     * File path.
     * 
     * @var string|null
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
    public function __construct(string $path = null, string $format = null, FileXml $fileXml)
    {

        $this->path = $path;
        $this->format = $format;
    }


    public function read()
    {
        print 'Reading from Txt file';
    }

    public function write($data)
    {
        print "Writing to txt file \n";
    }
}