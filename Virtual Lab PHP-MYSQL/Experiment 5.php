<?php
$array = array( 1, 2, 3, 4, 5, 6, 7);
$even_array = [];
$odd_array = [];
for( $i = 0 ; $i < count($array); $i++){
 if ($array[$i] % 2 == 0){
 array_push($even_array, $array[$i] / 2); 
 $array[$i] = $array[$i] / 2;
 }
 else{
 array_push($odd_array, $array[$i] * 3); 
 $array[$i] = $array[$i] * 3;
 }
 } 
echo "\n";
print_r ($even_array);
echo "\n";
print_r ($odd_array) ;
echo "\n new Array \n";
print_r($array);
?>
