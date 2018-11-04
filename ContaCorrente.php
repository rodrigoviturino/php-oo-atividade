<?php

require_once("Conta.php");

class ContaCorrente extends Conta{

    public $creditoPessoal;

    public function getCreditoPessoal(){
        return $this->creditoPessoal;
    }

    public function setCreditoPessoal($valor){
        $this->creditoPessoal = $valor;
    }

}