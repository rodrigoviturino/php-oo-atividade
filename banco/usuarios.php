<?php

$servidor = "localhost";
$user = "root";
$password="";
$banco = "curso_phpoo";

$conn = new mysqli($servidor, $user, $password, $banco);

if($conn->connect_error){
    die("Falha na conexão: ". $conn->connect_error);
}

$sql = "SELECT * FROM `usuarios`";

$resultado = $conn->query($sql);


if($resultado->num_rows > 0){
    print "<pre>";
    var_dump($resultado);
} else {
    echo "Não retornou bosta nenhuma";
}

$conn->close();