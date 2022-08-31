<!-- Write a PHP program to check if a given string starts with 'C#' or not. -->
<?php

function startswithCsharp($str)
{
   return substr($str,0,2) == "C#";
}

var_dump(startswithCsharp("C#")) . "\n";
var_dump(startswithCsharp(" JANE")) . "\n";
var_dump(startswithCsharp("PIT C#")) . "\n";
var_dump(startswithCsharp("C# Sharp")) . "\n";
var_dump(startswithCsharp("C++")) . "\n";





?>