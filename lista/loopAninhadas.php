<?php

$times = array(
    "Palmeiras",
    "Internacional",
    "Flamengo",
    "São Paulo",
    "Grêmio",
    "Atlético-MG",
    "Santos",
    "Cruzeiro",
    "Atlético-PR",
    "Fluminense",
    "Corinthians",
    "Bahia",
    "Vasco",
    "Botafogo",
    "Ceará",
    "Sport",
    "América-MG",
    "Vitória",
    "Chapecoense",
    "Paraná",
);

$confrontos = array(
    "Palmeiras",
    "Internacional",
    "Flamengo",
    "São Paulo",
    "Grêmio",
    "Atlético-MG",
    "Santos",
    "Cruzeiro",
    "Atlético-PR",
    "Fluminense",
    "Corinthians",
    "Bahia",
    "Vasco",
    "Botafogo",
    "Ceará",
    "Sport",
    "América-MG",
    "Vitória",
    "Chapecoense",
    "Paraná",
);




foreach ($times as $time) {
    foreach ($confrontos as $confronto) {
        if($time != $confronto){
            echo $time . " X " . "$confronto" . "<br>";
        }else{
            echo "<hr>";
        }
    }
}