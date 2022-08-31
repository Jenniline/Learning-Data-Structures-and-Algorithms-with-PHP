<!-- Write a PHP program to create a new string taking 
the first 3 characters of a given string and return the
 string with the 3 characters added at both the front and back. 
 If the given string length is less than 3, use whatever characters are there -->

<?php

function first3xters($str)
{
    return strlen($str) < 3 
    ? $str.$str.$str 
    : substr($str,0,3).$str.substr($str,0,3) ;
}

echo first3xters("HELLO|WORLD")."\n";
echo first3xters("HE")."\n";
echo first3xters("Python")."\n";
echo first3xters("JS")."\n";
echo first3xters("Code")."\n";





?>