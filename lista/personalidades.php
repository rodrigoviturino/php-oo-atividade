<?php

$personalidades = array(
"Maom",
"Isaac Newton",
"Jesus Cristo",
"Buda",
"Confúcio",
"Paulo de Tars",
"Cai Lun",
"Johannes Gutenberg",
"Cristóvão Colombo",
"Albert Einstein",
"Louis Pasteur",
"Galileu Galilei",
"Aristóteles",
"Euclides",
"Moisés",
"Charles Darwin",
"Qin Shi Huan",
"Augusto César",
"Nicolau Copérnico",
"Antoine Laurent Lavoisier",
"Constantino, o Grande",
"James Watt",
"Michael Faraday",
);

echo $personalidades;
$i=0;

while ($i < count($personalidades)){
    $total = count($personalidades);
    $i++;
    echo $personalidades[$i] . "<br>";
    if ($i == 20 ){
        echo "total de itens é: " . $i;
        break;
    }
}