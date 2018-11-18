<?php

$email = $_POST["email"];
$senha = $_POST["senha"];

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "curso_phpoo";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if($conn->connect_error){
    die("Erro ao conectar no banco " . $conn->error);
}

$sql = " INSERT INTO usuarios (email,senha) VALUES";
$sql .= "('$email','$senha')";

if($conn->query($sql) != 0 ){
    echo "Dados inseridos com sucesso!<br>";
} else {
    echo "Erro ao tentar inserir dados: " . $sql . "<br>". $conn->connect_error;
}

$conn->close();