<?php

function foo(callable $fn) 
{
    echo $fn();
}
function foo2(): void
{
    return;
}

// Error
// foo("Hello, World!");

// Hello, World!
foo(function () {
    return "Hello, World!";
});