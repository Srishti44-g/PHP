<?php
$Num = 'a';
$count_positive = 0;
$count_negative = 0;
$count_zeroes = 0;
do{
    $num = readline("Enter a number :");
    if($num >0)
      $count_positive++;
    else if($num<0)
      $count_negative++;
    else
    $count_zeroes++;
    $Num = readline("Do you want to Continue(y/n)?");
}while($Num =='a');

echo "\n Total Positive numbers entered :", $count_positive ;
echo "\n Total negative numbers entered :", $count_negative ; 
echo "\n Total Zeroes entered :", $count_zeroes;
?>
