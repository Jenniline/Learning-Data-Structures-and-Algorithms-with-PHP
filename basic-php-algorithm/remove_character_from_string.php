<?php

    // Write a PHP program to remove the character in a 
    // given position of a given string. 
    // The given position will be in the range 0..string length -1 inclusive.

function removeCharacterFromString($s, $n)
{
    return substr($s,0,$n).substr($s, $n+1, strlen($s)-$n);
}

echo removeCharacterFromString("Python", 1)."\n";
echo removeCharacterFromString("Python", 0)."\n";

?>