<?php

$num1 = 10;
$num2 = 10;

$soma = $num1 + $num2;

switch ($soma){
    case ($soma > 20):
        $soma += 8;
        echo "Valor somado de " . $num1 . " + " . $num2 . " + 8 é : " . $soma;
        break;
        case ($soma <= 20 ):
        $soma -= 5;
        echo "Valor somado de " . $num1 . " + " . $num2 . " - 5 é : " . $soma;
        break;
}
