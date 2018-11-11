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

    <select name="materias[]" size="4" multiple>
        <option value="PHP">PHP</option>
        <option value="MYSQL">MYSQL</option>
        <option value="JS">JAVASCRIPT</option>
        <option value="ANGULAR">ANGULAR</option>
        <option value="REACT">REACT</option>
        <option value="HTML">HTML</option>
        <option value="CSS">CSS</option>
        <option value="JQUERY">JQUERY</option>
    </select>
<br><br>
<label>Conte um pouco da sua história e porque deseja fazer um curso gratuito nela?</label><br>
<textarea name="mensagem" cols="30" rows="5"></textarea><br>

    <input type="submit" value="Enviar dados">
</form>