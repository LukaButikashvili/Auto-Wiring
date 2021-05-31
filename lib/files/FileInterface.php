<?php

namespace Omedia\files;

interface FileInterface {

    /**
     * Read data from file of the selected format.
     */
    public function read();

    /**
     * Write data into selected file format
     * 
     * @param string|array $data
     */
    public function write($data);

}