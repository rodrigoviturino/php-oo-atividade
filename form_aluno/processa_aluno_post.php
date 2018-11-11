<?php

echo "Nome : " . $_POST["nome"] . "<br>";
echo "Turma: " . $_POST["turma"] . "<br>";
echo "Periodo: " . $_POST["periodo"] . "<br>";
echo "Materia: ";
foreach($_POST["materias"] as $materia) {
    echo $materia . ",";
}

echo "<br>";
echo "Mensagem: " . $_POST["mensagem"];