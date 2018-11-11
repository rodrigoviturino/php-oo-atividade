<?php

$comidas = array(
    "Bolo",
    "Pudim",
    "Sorvete",
    "Torta",
    "Pães",
);

$coberturas = array(
    "Chocolate",
    "Morango",
    "Caramelo",
    "Limão",
    "Uva"
);

foreach($comidas as $comida){
    foreach($coberturas as $cobertura){
        echo $comida . " tem cobertura de: " . $cobertura . "<br>";
    }
}