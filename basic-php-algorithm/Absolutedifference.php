<!-- Write a PHP program to get the absolute difference between n and 51. 
If n is greater than 51 return triple the absolute difference. -->

<?php

function absoluteDifference($n)
{
    return $n > 51 ? ($n - 51) * 3  : $n - 51;
}

echo absoluteDifference(53). "\n";

echo $a =  absoluteDifference(30). "\n";
echo abs($a) . "\n";
echo absoluteDifference(51). "\n";