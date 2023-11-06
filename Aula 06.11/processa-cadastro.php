<?php

include_once 'db.php';

$sql = "INSERT INTO usuarios (nome, email, usuario, senha, data) VALUES ('".$_POST['nome']."','".$_POST['email']."','".$_POST['usuario']."','".$_POST['senha']."', NOW())";

if ($db->query($sql) === TRUE) {
    header('Location: cadastro.php');
} else {
    echo "Erro: " . $sql . "<br>" . $db->error;
}

?>