<?php

require_once("Conta.php");
require_once("Pessoa.php");

function imprimir($valor){
    print "<pre>";
    print ($valor);
    print "</pre>";
}


// Objeto
$teste = new Conta();
$teste->setCliente('Rodrigo');
$teste->setNumero(22);
$teste->setSacar(99.99);

imprimir($teste->getCliente() . " fez o saque na quantia de " . $teste->getSacar() . " na conta " . $teste->getNumero());