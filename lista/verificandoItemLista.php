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

$nomeProcurado = "São Paulo";
$mensagem = "Capital não localizada";

foreach($capitais as $capital){
        if($capital == $nomeProcurado){
            $mensagem = "Capital localizada com sucesso! <br>";
            break;
        }
}

echo $mensagem;
