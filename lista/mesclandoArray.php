<?php

$produto = array(
    "Nome" => "Celular",
    "Preço" => 300,
    "Descrição" => "Rapido e bom para jogo"
);

$produtos = array(
    array(
        "nome" => "Celular",
        "preco" => 300,
    ),
    array(
        "nome" => "Computador",
        "preco" => 500,
    ),
    array(
        "nome" => "Impressora",
        "preco" => 100,
    ),
    array(
        "nome" => "Agua",
        "preco" => 2,
    ),
);


foreach($produtos as $produto){
    echo "Produto: " . $produto["nome"] . "<br>";
    echo "Preço: " . $produto["preco"] . "<br>";
    echo "<hr>";
}