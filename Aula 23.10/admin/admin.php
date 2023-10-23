<?php
session_start();
if (isset($_SESSION['ativa']) && $_SESSION['ativa'] == TRUE) {
    include_once 'includes/head.php';
?>
<body>
    <div class="admin">
        <h1>Bem vindo ao painel do site!</h1>
        <p>Aqui você tem acesso a administração do seu sistema</p>
        <a href="logoff.php">Sair</a> 
    </div>
</body>
<?php
} else {
    echo '<p>Você não tem permissão para acessar esta página.</p>';
}
?>