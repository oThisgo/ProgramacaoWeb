<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de BTUs</title>
</head>
<body>
    <form method="post" action="processa.php">
        <fieldset>
            <legend>Calculadora de BTUs</legend>
            <div style="display: inline-block">
                <label for="largura">Largura (m):</label><br>
                <input name="largura" type="number" required>
            </div>
            <div style="display: inline-block">
                <label for="comprimento">Comprimento (m):</label><br>
                <input name="comprimento" type="number" required>
            </div><br>
            <br>
            <label for="ambiente">Ambiente: </label><br>
            <select name="ambiente" required>
                <option selected disabled>-- Escolha --</option>
                <option value="residencial">Residencial</option>
                <option value="comercial">Comercial</option>
            </select><br>
            <br>
            <input type="submit" name="enviar" value="CALCULAR">
        </fieldset>
    <form>
</body>
</html>