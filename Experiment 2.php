<!DOCTYPE html>
<html>
<head>
  <title>Using switch-case</title>
</head>
<body>
<form method="post">
  Enter the  number:<br>
  <input type="text" name="number">
  <input type="submit" name="submit">
</form>
<?php
 if($_POST){
     $var = $_POST['number'];
switch($var)
{
    case 1 : echo "Hello";
    break;
    case 2 : echo "welcome";
    break;
}
 }
?>
