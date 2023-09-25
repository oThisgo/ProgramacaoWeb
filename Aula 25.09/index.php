<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>
<body>
    <form method="post" action="processa.php">
        <label for="nome">Digite seu nome: </label>
        <input type="text" name="nome" required>
        <br>
        <label for="email">Digite seu e-mail: </label>
        <input type="email" name="email" required>
        <br>
        <label for="idade">Digite sua idade: </label>
        <input type="number" name="idade" required>
        <br>
        <input type="submit" placeholder="Enviar">
    </form>
</body>
</html>

