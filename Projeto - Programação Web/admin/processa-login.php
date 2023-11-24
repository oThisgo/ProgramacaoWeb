<?php

include_once '../Includes/db.php';

$user = "SELECT * FROM admins WHERE usuario = '".$_POST['user']."'";
$result = mysqli_query($db, $user);

if (mysqli_num_rows($result) == 1) {
    $senha = "SELECT senha FROM admins WHERE usuario = '".$_POST['user']."'";
    $pass = mysqli_query($db, $senha);

    if ($_POST['pass'] == $pass) {
        header('Location: painel.php');
    } else {
        echo 'Algo deu errado :(';
    }
} else {
    echo "Usuário ou senha incorretos.";
}

?>