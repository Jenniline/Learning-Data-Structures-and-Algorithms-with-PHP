<!-- Write a PHP program to check if a string 'yt' 
appears at index 1 in a given string. If it appears 
return a string without 'yt' otherwise return the original string. -->

<?php


function checkStringForyt(string $n)
{

    $firstTwo = substr($n,0,2);

    if ($firstTwo == "yt") {
       print_r( str_replace("yt","",$n));
    } else {
        return $n;
    }
  
}

echo checkStringForyt("JANE")."\n";
echo checkStringForyt("Python"). "\n";
echo checkStringForyt("ytade")."\n";


$str = "Hire freelance developer Hire";
echo trim($str, "Hir");

function correctSolution($s)
{
    return substr($s, 1, 2) == "yt" ? substr($s, 0, 1).substr($s, 3, strlen($s)-2) : $s;

}


?>