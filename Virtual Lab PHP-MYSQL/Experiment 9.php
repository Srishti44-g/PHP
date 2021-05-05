<?php

//Write a program that displays a different message based on time of day. For-example, page should display 
//“Good Morning” if it is accessed in the morning. 

//change the message to what you want
$afternoon ="Good Afternoon";
$evening ="Good Evening";
$late ="Working late";
$morning ="Good morning";
$friday ="Get ready for the weekend";
 
//Get the current hour
$current_time = date('G');

//Get the current day
$current_day = date("l");

//12pm to 4pm
if($current_time>=12 && $current_time <=14)
{
    echo $afternoon;
}

//5pm to 11pm
elseif($current_time >=17 && $current_time <=24)
{
    echo $evening;
}

//12am to 5am
elseif($current_time >=1 && $current_time <-5)
{
    echo $late;
}

//6am to 11am
elseif($current_time >=6 && current_time <=11)
{
    echo $morning;
}

//if it's Friday ,display a message
if($current_day =="Friday")
{
    echo $friday;
}
?>
