<!-- Write a PHP program to compute the sum of the two given integer values. 
If the two values are the same, then returns triple their sum. 
-->

<?php
function sum($a,$b)
{
    return $a !== $b ? $a + $b : ($a + $b) * 3;
}

echo sum(1,2). "\n";
echo sum(3,2). "\n";
echo sum(2,2). "\n";

// Another possible thinking can be to use 

function sum2($a,$b)
{
   return $a === $b ? ($a * $b) * 3 : $a + $b;
}


echo sum2(1,2). "\n";
echo sum2(3,2). "\n";
echo sum2(2,2). "\n";


?>