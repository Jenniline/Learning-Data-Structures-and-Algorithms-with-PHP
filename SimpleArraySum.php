<?php 
echo "Hello World"; 

echo "<br>";

$array = array(1,2,3,4,5,6);
$result = 0; 
echo "<br>"; 
echo $result;  
echo "<br>"; 
$length=count($array); 
echo $length; 
echo "<br>"; 

echo "<br>"; 
for ($i=0; $i < $length ; $i++) { 
        $result = $result + $array[$i]; 
}
echo $result;





?>