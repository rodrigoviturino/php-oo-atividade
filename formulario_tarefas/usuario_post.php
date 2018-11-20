<?php

$email = $_POST["email"];
$senha = $_POST["senha"];
$id = $_POST["id"];

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "curso_phpoo";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if($conn->connect_error){
    die("Erro ao conectar no banco " . $conn->error);
}


if($id > 0){
    $sql = (" UPDATE usuarios SET email = '$email', senha = '$senha' WHERE id = $id ");
} else {
    $sql = " INSERT INTO usuarios ";
    $sql .= " (email, senha) ";
    $sql .= " VALUE ";
    $sql .= " ('".$email."',";
    $sql .= "'".$senha."') ";
}

if($conn->query($sql) === TRUE ){
    echo "Dados gravados com sucesso!<br>";
} else {
    echo "Erro ao tentar inserir dados: " . $sql . "<br>". $conn->error;
}

echo "Voltar para " . "<a href='../banco/usuarios.php'>Home</a> ";

$conn->close();