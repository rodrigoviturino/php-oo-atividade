<?php

$capitais = array(
    "Rio Branco",
    "Maceió",
    "Macapá",
    "Manaus",
    "Salvador",
    "Fortaleza",
    "Brasília",
    "Vitória",
    "Goiânia",
    "São Luís",
    "Cuiabá",
    "Campo Grande",
    "Belo Horizonte",
    "Belém",
    "São Paulo",
);

if(in_array("Cuiabá",$capitais)){
    echo "Capital <b>LOCALIZADO</b> na lista";
} else{
    echo "Capital <b>NÃO</b> consta na lista.";
}