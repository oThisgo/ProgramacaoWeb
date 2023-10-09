<?php 
include_once "dadosnoticias.php"; 
include_once "includes/header.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>

<body>

<div id="campo">
    <?php $index = 0; ?>
    <?php foreach ($noticias as $noticia) { ?>  
        <div id="bloco">
            <a id="titulo" href="noticia.php?id=<?php echo $index; ?>"><?php echo $noticia['title']; ?></a>
            <p id="resumo"> <?php echo $noticia['intro']; ?></p>
        </div>
        <?php $index++; ?>
    <?php } ?>

</div>

</body>

</html>