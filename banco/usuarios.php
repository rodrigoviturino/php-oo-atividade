<?php

$servidor = "localhost";
$user = "root";
$password="";
$banco = "curso_phpoo";

$conn = new mysqli($servidor, $user, $password, $banco);

if($conn->connect_error){
    die("Falha na conexão: ". $conn->connect_error);
}

// SELECT
$sql = "SELECT * FROM usuarios";
$resultado= $conn->query($sql);

if($resultado->num_rows > 0){
    while($dados = $resultado->fetch_array()){
        echo "ID: " . $dados["id"] . "<br>";
        echo "Email: " .$dados["email"] . "<br>";
        echo "Senha: " . $dados["senha"] . "<br><hr>";
    }
} else{
    echo "Nenhum registro encontrado";
}

$conn->close();