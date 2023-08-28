<form method="get" action="resposta.php">
    <label for="aluno">Digite o seu nome: </label>
    <input name="aluno" type="text">
    <label for="age">Digite sua idade: </label>
    <input name="age" type="number">
    <br>
    <label for="gender">Selecione o seu gênero: </label>
    <input name="gender" type="radio" value="Masculino">Masculino</input>
    <input name="gender" type="radio" value="Feminino">Feminino</input>
    <br>
    <label for="UF">Selecione sua Unidade Federativa: </label>
    <select name="UF">
        <option value="RS">RS</option>
        <option value="SP">SP</option>
        <option value="RJ">RJ</option>
        <option value="SC">SC</option>
    </select>
    <hr>
    <label for="notas">Digite suas notas: </label>
    <input type="number" id="notas" name="nota1" placeholder="Nota 1" step=".01">
    <input type="number" id="notas" name="nota2" placeholder="Nota 2" step=".01">
    <input type="number" id="notas" name="nota3" placeholder="Nota 3" step=".01">
    <hr>
    <label for="triangulo">Digite os lados do triângulo: </label>
    <input type="number" id="triangulo" name="lado1" placeholder="Lado 1" step=".01">
    <input type="number" id="triangulo" name="lado2" placeholder="Lado 2" step=".01">
    <input type="number" id="triangulo" name="lado3" placeholder="Lado 3" step=".01">
    <hr>
    <label for="dia">Digite o dia da semana: </label>
    <input name="dia" type="text">
    <br>
    <input type="submit" placeholder="Enviar">
</form>