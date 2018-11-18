<?php


$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "curso_phpoo";

$conn = new mysqli($servidor, $usuario, $senha, $banco);
if($conn->connect_error){
    die("Falha ao conectar no banco de dados:" . $conn->connect_error);
}

$nome = $_POST["nome"];
$detalhes = $_POST["detalhes"];
$status = $_POST["status"];

// $sql = $conn->query("SELECT * FROM tarefas");

$sql = " INSERT INTO tarefas (nome,descricao,status) VALUES";
$sql .= "('$nome','$detalhes','$status')";

if($conn->query($sql) != 0 ){
    echo "Dados inseridos com sucesso!<br>";
} else {
    echo "Erro ao tentar inserir dados: " . $sql . "<br>". $conn->connect_error;
}

$conn->close();