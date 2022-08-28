<!-- Write a PHP program to check two given integers, 
and return true if one of them is 30 or if their sum is 30 -->

<?php

function test( int $a,int $b) 
{
    return ($a == 30) || ($b == 30) || ($a + $b == 30);
}

var_dump(test(30.0000, 0)); 