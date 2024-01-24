<?php
$arr2 = array(1,20,3,4,5);
$arr1 = array(91,72,350,46,51);
//ARRAY COMPARE
$result1=array_diff($arr1,$arr2);
print_r($result1);
//ARRAY SORTING ASCENDING ORDER 
sort($arr1);
foreach($arr1 as $v)
{		echo "<br>".$v.",";
}
echo"<br>";
print_r($arr1);
//FILLING VALUE IN ARR1 
$arr1=array_fill(0,1,01);
echo "<br>";
print_r($arr1);
?>