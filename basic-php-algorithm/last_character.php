<!-- Write a PHP program to create a new string 
with the last char added at the front
 and back of a given string of length 1 or more -->

<?php
 
    #function takes a string
    #get last character of a string which is length minus 1


    function newString($str)
    {    
        $strlength = strlen($str);
        $lastIndex = substr($str, -1);
        $firstIndex = substr($str, 0,1);
        
        return $lastIndex.$str.$lastIndex;
    }

    echo newString("JANE")."\n";
    echo newString("PAINT")."\n";
    echo newString("B")."\n";
    echo newString("Red")."\n";
    echo newString("Green")."\n";
    echo newString("1")."\n";




?>