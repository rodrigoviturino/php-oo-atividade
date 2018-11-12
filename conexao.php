<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";

$conn = new mysqli($servidor, $usuario, $senha);

if($conn->connect_error){
    die("Erro ao tentar criar a conexão: " . $conn->connect_error);
}

echo "Conexão efetuada com sucesso!";