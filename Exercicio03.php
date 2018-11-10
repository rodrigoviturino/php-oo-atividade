<?php

$nome = "Bia";
$sexo = "feminino";
$idade = 18;

if($sexo == "feminino" && $idade < 25){
    echo "Seja Bem-vinda " . $nome;
} else {
    echo $nome . " não foi dessa vez, tente na próxima.";
}