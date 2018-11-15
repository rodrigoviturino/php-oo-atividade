<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tarefas</title>

<style>
    table{
        border-collapse: collapse;
        width:100%;
        font-family:arial , sans-serif;
        
    }

    th,td{
        border: solid 1px black;
        text-align:left;
        padding:10px;
        font-size:1.125em;
    }
    tr:nth-child(even){
        background-color:#d1d1d1;
    }
    tr:nth-child:hover{
        background:000;
    }

</style>
</head>

<body>

<?php
// Conexao com Banco 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "curso_phpoo";

$conn = new mysqli($servidor,$usuario,$senha,$banco);
    if($conn->connect_error){
        die("A Conexão falhou: " . $conn->connect_error);
    }


// SELECT
$sql = "SELECT * FROM tarefas";
$resultado= $conn->query($sql);

if($resultado->num_rows > 0){

    echo "<table border=1>";
    echo "<tr><th>ID</th><th>Nome</th><th>Status</th></tr>";

    while($dados = $resultado->fetch_array()){
        echo "<tr>";
            echo "<td>" . $dados["id"] . "</td>";
            echo "<td>" . $dados["nome"] . "</td>";
            echo "<td>" . $dados["status"] . "</td>";
        echo "</tr>";
    }
} else{
    echo "Nenhum registro encontrado";
}

?>


</body>
</html>