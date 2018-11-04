<?php

class Conta{

    private $numero;
    public $cliente;
    public $endereco;


    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($valor){
        $this->endereco = $valor;
    }
}