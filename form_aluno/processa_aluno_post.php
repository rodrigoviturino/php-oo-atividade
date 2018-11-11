<?php

echo "Nome Completo: " . $_POST["nome"] . "<br>";
echo "Turma: " . $_POST["turma"] . "<br>";
echo "Periodo: " ;
if($_POST["periodo"] == "manha"){
    echo "Manhã";
}elseif($_POST["periodo"] == "tarde"){
    echo "Tarde";
}elseif($_POST["periodo"] == "noite"){
    echo "Noite";
}else{
    echo "Usuario não informou o periodo.";
}