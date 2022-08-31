<!-- Write a PHP program to check if a given positive number
 is a multiple of 3 or a multiple of 7. -->

<?php

 function multipleof3or7($n)
 {
   return abs($n) % 3 == 0 || abs($n) % 7 == 0;
 }

 echo multipleof3or7(3). "\n";
 echo multipleof3or7(19). "\n";

 var_dump(multipleof3or7(3));
 var_dump(multipleof3or7(19));



?>