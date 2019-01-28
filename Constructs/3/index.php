<?php

# 함수

function foo(callable $callback): void
{
    // $bar = & $GLOBALS['bar'];
    global $bar;
    static $var = 0;
    return;
}

# 상수

const CONSTANT = "Hello, World!";

# include, require

# include "HelloWorld.php"
# include_once "HelloWorld.php"
# require "HelloWorld.php"
# require_once "HelloWorld.php"

# 그 외

# empty(), exit(), die(), eval(), isset(), unset() 
