<?php

function checkGivenInteger($n)
{
    if (abs($n - 100) <= 10 || abs($n - 200) <= 10) {
        return true;
    }

    return false;

}

var_dump(checkGivenInteger(103));
var_dump(checkGivenInteger(90));
var_dump(checkGivenInteger(89));


echo checkGivenInteger(103);

?>

