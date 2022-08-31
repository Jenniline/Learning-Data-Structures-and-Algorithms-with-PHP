<!-- Write a PHP program to create a new string which is 4 copies of the 2 front 
characters of a given string. If the given string length is less than 2 return 
the original string.  -->


<?php
function fourCopies($n)
{
    # first check if the string is more than two characters     
    # if true     use substr to get the 2 front characters of a string 
    # if given string is less than 2 then it should return the original string 
    # if strlen($n) > 2 ? substr($n,0,2). : $n 

    return strlen($n) > 2 ? substr($n,0,2).substr($n,0,2).substr($n,0,2).substr($n,0,2) : $n;

}

echo fourCopies("C Sharp")."\n";
echo fourCopies("JS")."\n";
echo fourCopies("a")."\n";




?>