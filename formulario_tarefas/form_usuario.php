<?php

    $idUsuario = $_GET["id"];
    echo "Id usuario: " . $idUsuario;


    if($idUsuario > 0){

        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "curso_phpoo";

        $conn = new mysqli($servidor, $usuario, $senha, $banco);
        if($conn->connect_error){
            die("Falha na conexão: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM usuarios WHERE id = " . $idUsuario;

        $resultado = $conn->query($sql);
        if($resultado->num_rows > 0){
            $row = $resultado->fetch_assoc();
            $email = $row["email"];
            $senha = $row["senha"];
            $id = $row["id"];
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Usuario</title>
</head>
<body>

<form action="usuario_post.php" method="post">

    <label>EMAIL</label><br>
    <input type="text" name="email" value="<?=$email?>"><br>

    <label>SENHA</label><br>
    <input type="text" name="senha" value="<?=$senha?>"><br><br>

    <!-- Botão -->
    <input type="submit" value="Enviar">

    <input type="hidden" name="id" value="<?=$id?>">

</form>

<a href="../banco/usuarios.php">Acessar Lista de Usuarios</a>
    
</body>
</html>