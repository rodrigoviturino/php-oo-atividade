<?php

$numeroTabuada = 9;
$i = 0;
$a=[1,2,3,4];
$b = "text";


$d= "oi $b" . "<br>";
echo $d;
while ($i <= 10){
    echo $numeroTabuada . " = " . ($numeroTabuada * $i);
    echo "<br>";  
$i++;
}