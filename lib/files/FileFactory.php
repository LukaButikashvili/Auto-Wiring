<?php

namespace Omedia\files;

use Exception;

class FileFactory {
    /**
     * Creates a file class object
     * 
     * @param string $path
     * @return mixed
     * @throws Exception
     * 
     */
    public static function create(string $path) 
    {
        
        $format = self::readConfigFormat();
        
        $formatClasses = [
            'txt' => 'FileTxt',
            'json' => 'FileJson',
            'xml' => 'FileXml',
        ];

        if(!isset($formatClasses[$format])) {
            throw new Exception(sprintf("Supplied format %s doesn't exist", $format));
        }

        //var/www/html/exampleOOP/lib/files/FileFactory.php
        $className = $formatClasses[$format];

        $class = __NAMESPACE__ . '\\' . $className;

        return new $class($path, $format);
    }

    protected static function readConfigFormat()
    {
        $config = json_decode(file_get_contents('config.json'), true);

        return $config['files']['format'];
    }
}