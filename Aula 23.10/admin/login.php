<?php

    $user = [
        "thiago@gmail.com" => "17012005",
        "thiago@outlook.com" => "20050117"
    ];

    session_start();
    if (array_key_exists($_POST['email'], $user)) {
        $email = $_POST['email'];
        if ($_POST['senha'] == $user[$email]) {
            $_SESSION['ativa'] = TRUE;
            header('location: admin.php');
        } else {
            echo '<p>Usuário ou senha incorretos</p>';
        }
    } else{
        echo '<p>Você não tem permissão para acessar esta página</p>';
    }
    
?>