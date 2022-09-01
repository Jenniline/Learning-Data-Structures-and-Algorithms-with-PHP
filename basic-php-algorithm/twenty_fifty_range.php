<!-- Write a PHP program to check whether three given integer values 
are in the range 20..50 inclusive. Return true if 1 or more of them 
are in the said range otherwise false -->


<?php


function twentyFiftyRange($a,$b,$c)
{
    return ($a >= 20 && $a <= 50) || ($b >= 20 && $b <= 50) || ($c >= 20 && $c <= 50);
}

var_dump(twentyFiftyRange(11, 20, 12));
var_dump(twentyFiftyRange(30, 30, 17));
var_dump(twentyFiftyRange(15, 12, 8));



?>
