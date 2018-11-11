<?php

$numero = 10;
$i = 1;

while($i < 3){
    echo "<br>";
    switch ($numero) {
        case 1:
            echo "O numero " . $numero . " representa o mês de: Janeiro";
            break;
        case 2:
            echo "O numero " . $numero . " representa o mês de: Fevereiro";
            break;
        case 3:
            echo "O numero " . $numero . " representa o mês de: Março";
            break;
        case 4:
            echo "O numero " . $numero . " representa o mês de: Abril";
            break;
        case 5:
            echo "O numero " . $numero . " representa o mês de: Maio";
            break;
        case 6:
            echo "O numero " . $numero . " representa o mês de: Junho";
            break;
        case 7:
            echo "O numero " . $numero . " representa o mês de: Julho";
            break;
        case 8:
            echo "O numero " . $numero . " representa o mês de: Agosto";
            break;
        case 9:
            echo "O numero " . $numero . " representa o mês de: Setembro";
            break;
        case 10:
            echo "O numero " . $numero . " representa o mês de: Outubro";
            break;
        case 11:
            echo "O numero " . $numero . " representa o mês de: Novembro";
            break;
        case 12:
            echo "O numero " . $numero . " representa o mês de: Dezembro";
            break;
    }

$i++;    
}