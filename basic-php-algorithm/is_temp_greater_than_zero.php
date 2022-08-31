<!-- Write a PHP program to check if one given temperatures 
is less than 0 and the other is greater than 100. -->

<?php

function checkTemp(int $a, int $b)
{
    return $a < 0 && $b > 100 || $a > 0 && $b < 100;
}

var_dump(checkTemp(120,-1));
var_dump(checkTemp(-1, 120));
var_dump(checkTemp(2, 120));


?>