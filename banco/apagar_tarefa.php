<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "curso_phpoo";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if($conn->connect_error){
    die("Erro ao tentar conectar de dados: " . $conn->connect_error);
}

$sql = "DELETE FROM tarefas WHERE id = " . $_GET["id"];

if($conn->query($sql) != 0 ){
    echo "Dados apagado com sucesso! <br>";
} else {
    echo "Deu errado olha só, " . $conn->error;
}

$conn->close();

?>

<a href='http://localhost/php-oo-atividade/banco/index.php'> Voltar para Home</a>

