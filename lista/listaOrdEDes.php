<?php

$lista = array(
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

asort($lista);
echo "LISTA CRESCENTE <br><hr>";
foreach($lista as $item){
    echo $item;
    echo "<br>";
}

arsort($lista);
echo "<br> LISTA DECRESCENT <br><hr>";
foreach ($lista as $item) {
    echo $item;
    echo "<br>";
}

shuffle($lista);
echo "<br> LISTA DESORDENADA <br><hr>";
foreach ($lista as $item) {
    echo $item;
    echo "<br>";
}
