<?php

include_once 'db.php';

$user = mysqli_query($db, "SELECT * FROM usuarios WHERE usuario = '".$_POST['usuario']."'");

if (mysqli_num_rows($user) == 1) {
    $senha = "SELECT senha FROM usuarios WHERE usuario = '".$_POST['usuario']."'";
    if ($_POST['senha'] == $senha) {
        header('Location: landpage.php');
    } else {
        echo 'Algo deu errado :(';
    }
} else {
    echo "Usuário ou senha incorretos.";
}

?>