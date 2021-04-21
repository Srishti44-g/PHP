<html>  
<head>  
<title>Factorial Program using loop in PHP</title>  
</head>  
<body>  
<form method="post">  
    Enter the Number:<br>  
    <input type="number" name="number" id="number">  
    <input type="submit" name="submit" value="Submit" />  
</form>  
<?php   
    if($_POST){  
        $fact = 1;    
        $number = $_POST['number'];  
        echo "Factorial of $number:<br><br>";    
            while($number>=1){         
            $fact = $fact * $number;
            $number--;  
            }  
            echo $fact . "<br>";  
    }  
?>  
</body>  
</html>  
