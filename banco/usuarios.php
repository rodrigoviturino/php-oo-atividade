<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Usuarios</title>
</head>
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
<body>
    

<?php

// Conexao Banco
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

    echo "<table border=1>";
        echo "<tr>
            <th>ID</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Status</th>
            <th>Ação</th>
        </tr>";

        while($dados = $resultado->fetch_array()){
        echo "<tr>";
            echo "<td>" . "ID: " . $dados["id"] . "</td>";
            echo "<td>" . "Email: " .$dados["email"] . "</td>";
            echo "<td>" . $dados["senha"] . "</td>";
            echo "<td>" . $dados["status"] . "</td>";
            //     if($dados["status"] == 1 ){
            //         echo "<td>" . "Status: " . $dados["status"] . "</td>";
            // }
        echo "<td>";
                echo "<a href='delete_usuario.php?id=".$dados["id"]."'>Apagar</a>";
                echo "&nbsp|&nbsp";
                echo "<a href='../formulario_tarefas/form_usuario.php?id=".$dados["id"]."'>Editar</a>";
        echo "</td>";
        echo "</tr>";   
        }

        echo "</table>";

    } else{
        echo "Nenhum registro encontrado";
    }
    
    $conn->close();
    
    ?>

    <h3>Adicionar Usuario</h3>
    <a href="../formulario_tarefas/form_usuario.php">Inserir Usuario</a>


</body>
</html>