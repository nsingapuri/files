<?php
/**
 * FileUnopenableException
 *
 * @package    nsingapuri
 * @subpackage files
 * @author     Nalin Singapuri - http://nalin.singapuri.com
 * @copyright  2016
 * @license    GPL
 * @link       https://github.com/nsingapuri/files
 *
 * PHP version >= 5.5
 **/

namespace nsingapuri\exception\FileException;
use nsingapuri\exception\FileException;

/**
 * FileUnopenableException: FileException for when a file cannot be opened
 **/
class FileUnopenableException extends FileException
{


    /**
     * Constructor
     *
     * @param string    $fileName The name of the file.
     * @param string    $message  The message.
     * @param integer   $code     The error code.
     * @param Exception $previous The prior Exception.
     *
     * @return FileUnopenableException
     **/
    public function __construct($fileName, $message='cannot be opened', $code=0, Exception $previous=null)
    {
        parent::__construct($fileName, $message, $code, $previous);

    }


}
