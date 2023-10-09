<?php
    include 'dadosnoticias.php';
    $id = intval($_REQUEST['id']);
?>

<style>
*{
    font-family: Arial, Helvetica, sans-serif;
}

p{
    display: block;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
    text-align: justify;
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícia</title>
</head>
<body>

    <h1 style = "display: block; text-align: center;"><?php echo $noticias[$id]['title']; ?></h1>
    <p style = "display: block; text-align: center;"> <?php echo $noticias[$id]['intro']; ?></h1>
    
</body>
</html>