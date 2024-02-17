<?php

class NewError {

    private $logFile = 'log.txt';

    function __construct() {
        
    }

    public static function errorHandler($errno, $errstr, $errfile, $errline) {
        error_log("Error: [$errno] $errstr in $errfile on line $errline");
        echo("Error: [$errno] $errstr in $errfile on line $errline");
        
        return true;
    }
}

set_error_handler(array('NewError', 'errorHandler'));

echo $undefinedVariable;
?>  
