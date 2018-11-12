<?php

echo "Nome : " . $_POST["nome"] . "<br>";
echo "Turma: " . $_POST["turma"] . "<br>";
echo "Periodo: " . $_POST["periodo"] . "<br>";
echo "Materia: ";
foreach($_POST["materias"] as $materia) {
    echo $materia . ",";
}

echo "<br>";
echo "Mensagem: " . $_POST["mensagem"] . "<br>";

echo "Email: " . $_POST["email"] . "<br>";
echo "Senha: " . $_POST["senha"] . "<br>";

echo "<pre>";
var_dump($_POST);