<form action="processa_aluno_post.php" method="post">
    <label for="nome">Nome Completo:</label>
    <input type="text" name="nome" id="turma"><br>

    <label for="turma">Turma:</label>
    <input type="text" name="turma" id="turma"><br>

    <label for="periodo">Periodo:</label>
    <input type="radio" name="periodo" value="manha">Manhã
    <input type="radio" name="periodo" value="tarde">Tarde
    <input type="radio" name="periodo" value="noite">Noite
    <br>

    <input type="submit" value="Enviar dados">
</form>