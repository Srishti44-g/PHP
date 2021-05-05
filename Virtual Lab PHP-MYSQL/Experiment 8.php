<?php  
function fact ($n)  
{  
    if($n <= 1)   
    {  
        return 1;  
    }  
    else   
    {  
        return $n * fact($n - 1);  
    }  
}  
  
echo "Factorial of 6 is " .fact(6);  
?>  
