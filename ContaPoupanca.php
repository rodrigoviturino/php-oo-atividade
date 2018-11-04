<?php

require_once("Conta.php");

class ContaPoupanca extends Conta{

    public $juros;

    public function getJuros(){
        return $this->juros;
    }

    public function setJuros($valor){
        $this->juros = $valor;
    }
    
}