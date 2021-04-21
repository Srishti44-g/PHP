<!DOCTYPE html>
<html>
<head>
  <title>Maximum of a three number</title>
</head>
<body>
<form method="post">
  Enter the first number:<br>
  <input type="text" name="n1"><br>
  Enter the second number:<br>
  <input type="text" name="n2"><br>
  Enter the third number:<br>
  <input type="text" name="n3">
  <br>
  <input type="submit" name="submit">
</form>
<?php
if($_POST){
      $num1=$_POST["n1"];
      $num2=$_POST["n2"];
      $num3=$_POST["n3"];
      if($num1>$num2 && $num1>$num3){
        echo $num1;
      }
      else{
        if($num2>$num1 && $num2>$num3){
          echo $num2;
        }
        else
          echo $num3;
      }
  }
?>
</body>
</html
