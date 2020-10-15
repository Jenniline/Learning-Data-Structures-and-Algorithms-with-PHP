<?php

// $colors =  array("red", "green", "blue", "yellow", ' ',' '); 
// // $length = strlen($letters);


// foreach ($colors as $value) {
//     echo "$value <br>";
//   }

// $letters = "hellow";
// echo  $length = strlen($letters);

// echo "<br>";

// for ($i=0; $i <= $length ; $i++) { 
//     echo $letters[$i] . "<br>";
// }

function newLine($string)
{
    for ($i=0; $i <= strlen($string) ; $i++) { 
        // // echo $string[$i] . "<br>";
        // if ("a,e,i,o,u" === $string[$i] ) {
        //    echo $string[$i];
        // }else {
        //     echo "no way";
        // }

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

