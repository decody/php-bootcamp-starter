<?php

/**
 * PHP debug
 * 
 * -- phpdbg index.php
 * -- break 17
 * -- run
 * -- watch $number
 * -- break del 0
 * -- continue
 */
$number = 1;

for($i=0;$i<10;$i++) {
    $number *= $i;
    // var_dump($number)
}
// 0
echo $number;