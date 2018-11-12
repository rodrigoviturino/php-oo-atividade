<?php
session_start();

$quarta = $_SESSION["quarta-pagina"] = "SIM";

echo "Estamos na quarta pagina: " . $quarta;

print "<pre>";
var_dump($_SESSION);

?>

<h4>Estamos na 4° página</h4>

<a href="index.php">Voltar para a 1° página</a>