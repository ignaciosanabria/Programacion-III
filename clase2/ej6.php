<?php
$array = array(
0 => rand(1,6),
1 => rand(1,6),
2 => rand(1,6),
3 => rand(1,6),
4 => rand(1,6),
);
$acumulador = 0;
for($i=0;$i<5;$i++)
{
    $acumulador = $acumulador + $array[$i];
}
if($acumulador/5 == 6)
{
    echo"El promedio es igual a 6<br>";
}
else
{
    if($acumulador/5 > 6)
    {
        echo"El promedio es mayor a 6";
    }
    else
    {
        echo"El promedio es menor a 6<br>";
    }
}
var_dump($array);
?>