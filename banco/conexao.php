<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco ="curso_phpoo";

$conn = new mysqli($servidor, $usuario, $senha,$banco);

if($conn->connect_error){
    die("Conexão falhou! " . $conn->connect_error);
}

$sql = "SELECT * FROM `tarefas`";
$result = $conn->query($sql);

if($result->num_rows > 0){
    // print "<pre>";
    // var_dump($result);

    echo "Resultado: " . $result->num_rows; 
} else {
    echo "Ele não trouxe nada!";
}

$conn->close();