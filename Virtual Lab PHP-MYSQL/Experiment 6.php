<html>
<body>
<?php
$a_array = array("India" => "NewDelhi","Afganistan" =>"Kabul","Australia" => "Canberra" ,"Bangladesh" => "Dhaka","Brazil" => "Brasilla","Canada" => "Ottawa","China" =>"Bijing","France" => "Paris","Japan" => "Tokyo","Thailand" => "Bangkok");
$j = 0;
foreach($a_array as $x =>$x_value)
{
    $newarray[0][$j] =$x;
    $newarray[1][$j] =$x_value;
    $j = $j+1;
}
echo "<table border =1>";
echo "<tr><th>Country</th><th>Capital</th></tr>";
for($k =0; $k< $j;$k++)
{
    echo "<tr><td>".$newarray[0][$k]."</td>";
    echo "<td>".$newarray[1][$k]."</td><tr>";
}
echo "</table>";
?>
</body>
</html>
