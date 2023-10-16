<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload PHP</title>
</head>
<body>
    <form method="post" action="processa.php" enctype="multipart/form-data">
        <input type="text" name="nome" placeholder="Digite seu nome">
        <fieldset>
            <legend>Faça upload do seu arquivo</legend>
            <input type="file" name="anexo" required>
        </fieldset>
        <input type="submit" name="enviar" value="Confirmar">
    </form>
</body>
</html>