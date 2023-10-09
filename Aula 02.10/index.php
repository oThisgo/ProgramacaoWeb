<?php
include_once "funcionarios.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jô Soares x Danilo Gentili</title>
</head>
<body>

    <?php

        if ( isset($_GET["ordem"]) && $_GET["ordem"] == "crescente") {
            asort($funcionarios);
            $ordem = "decrescente";
        } else {
            arsort($funcionarios);
            $ordem = "crescente";
        }

    ?>
    <table border="2">
        <thead>
            <tr>
                <th><a href="?ordem=<?php echo $ordem;?>">Nome do Funcionário</a></th>
                <th>Setor</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($funcionarios as $funcionario) {
                echo "
                    <tr>
                        <td>".$funcionario["nome"]."</td>
                        <td>".$funcionario["setor"]."</td>
                    </tr>
                ";}
            ?>

        <a>
        </tbody>
    </table>

</body>
</html>