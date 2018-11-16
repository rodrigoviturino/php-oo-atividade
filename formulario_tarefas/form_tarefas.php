<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>
</head>
<body>
    
<form action="gravar_tarefa.php" method="post">

<label>Nome</label><br>
<input type="text" name="nome"><br><br>

<label>Detalhes</label><br>
<textarea name="detalhes"  cols="50" rows="5"></textarea><br>

<label>Status</label><br>
<select name="status" id="">
    <option value="0">Pendente</option>
    <option value="1">Concluído</option>
</select>
<br><br>

<input type="submit" value="Enviar">

</form>


</body>
</html>