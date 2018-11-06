<?php

require_once("Conta.php");
require_once("Pessoa.php");
require_once("ContaPoupanca.php");
require_once("ContaCorrente.php");

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

$teste02 = new ContaPoupanca();
$teste02->setJuros(999);

imprimir($teste02->getJuros());