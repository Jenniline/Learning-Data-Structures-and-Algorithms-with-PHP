<?php

function newLine($string)
{
    for ($i=0; $i <= strlen($string) ; $i++) { 

        if ($string[$i] == "a" ||  $string[$i] == "e") {
                echo  $string[$i] . "<br>";
        }elseif ($string[$i] == "j" ||  $string[$i] == "n") {
            echo  $string[$i + 1] . "<br>";
        }else{
            echo "no";
        }
    }
}

newLine("janebb");








  ?>

