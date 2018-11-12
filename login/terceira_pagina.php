<?php
session_start();

$usuario = $_SESSION["usuario"];
$terceira = $_SESSION["terceira-pagina"] = "SIM";

echo "Nome: " . $usuario . "<br>";
echo "Estamos na terceira pagina: " . $terceira;

?>
<h4>Estamos na terceira pagina</h4>

<a href="quarta_pagina.php">Acessar a 4° página</a>