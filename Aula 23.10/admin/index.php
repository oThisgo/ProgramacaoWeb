<?php
include_once 'includes/head.php';
session_start();

$_SESSION['ativa'] = FALSE;

?>
<body>
    <form method="post" action="login.php">
        <input type="email" name="email" placeholder="Digite seu e-mail" required>
        <input type="password" name="senha" placeholder="Digite sua senha" required>
        <input type="submit" value="enviar">
    </form>
</body>