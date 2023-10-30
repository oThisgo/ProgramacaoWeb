<?php

include_once 'db.php';

$sql = "INSERT INTO usuarios (usuario, senha, data) VALUES ('".$_POST['usuario']."','".$_POST['senha']."',NOW())";

if ($db->query($sql) === TRUE) {
    header('Location: users.php');
} else {
    echo "Erro: " . $sql . "<br>" . $db->error;
}

?>