
<?php

$numero = 4;

$i = 1;

while($i < 10){
    $resultado1 = (10 % $numero);
    echo $resultado1;
    $resultado2 = $numero % 5;
    
    $resultado3 = $numero % 2;
    
    echo "<br>";
    // switch ($numero) {
    //     case ($resultado1 == 0):
    //         echo "o numero " . $numero . " é divisel por 10"; 
    //         break;
    //     case ($resultado2 == 0):
    //         echo "o numero " . $numero . " é divisel por 5"; 
    //         break;
    //     case ($resultado3 == 0):
    //         echo "o numero " . $numero . " é divisel por 2"; 
    //         break;
    // }

$i++;
}