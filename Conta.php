<?php

class Conta{

    private $numero;
    public $cliente;
    public $endereco;
    private $sacar;
    private $depositar;


    // Gets
    public function getNumero(){
        return $this->numero;
    }

    public function getCliente(){
        return $this->cliente;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function getSacar(){
        return $this->sacar;
    }

    public function getDepositar(){
        return $this->depositar;
    }


    // Sets
    public function setNumero($valor){ $this->numero = $valor; }
    public function setCliente($valor){ $this->cliente = $valor;}
    public function setEndereco($valor){ $this->Endereco = $valor;}
    public function setSacar($valor) { $this->sacar = $valor;}
    public function setDepositor($valor){ $this->depositar = $valor;}
    
}