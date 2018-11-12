<?php
session_start();

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$_SESSION["usuario"] = $usuario;
$_SESSION["segunda-pagina"] = "SIM";

?>
<h4>Estamos na segunda pagina</h4>

<?php
    echo "Usuario: " . $_SESSION["usuario"] . "<br>";
    echo "Estamos na segunda página: " . $_SESSION["segunda-pagina"] . "<br>";
?>

<a href="terceira_pagina.php">Acessar a 3° página</a>