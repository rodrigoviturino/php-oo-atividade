    <?php

$inicio = 0;
$final = 40;

$interador = 1;
$divisor = 2;

while($interador <= $final){
    $resultado = $interador % $divisor;
        if($resultado == 0){
            echo $interador . " é divisivel por " . $divisor . " e o resultado é: " . $resultado . "<br>"; 
        }
    $interador++;

}
