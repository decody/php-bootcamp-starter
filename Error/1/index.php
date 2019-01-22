<?php

set_error_handler(function($errno, $errstr, $errfile, $errline) {
    error_log($errstr);
});

set_exception_handler(function($errno, $errstr, $errfile, $errline) {
    echo $errstr;
});

echo file_get_contents('http://localhost:3000/auth/login');