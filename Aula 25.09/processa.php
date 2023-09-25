<?php
if ( isset($_POST) ) {
    $erros = [];
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);

    if ( strlen(preg_match("/[\'^£$%&*()}{@#~?><>,|=_+¬-]/", trim($_POST['nome'], " "))) < 4 ) {
        $erros[] = "Preencha seu nome corretamente.";
    } 
    if ( empty(trim($email, " ")) ) {
        $erros[] = "Preencha seu e-mail corretamente.";
    } 
    if ( empty(trim($idade, " ")) ) {
        $erros[] = "Preencha sua idade corretamente.";
    } 
    if ( !empty($erros) ) {
        foreach ($erros as $erro) {
            echo $erro."<br>";
        }
    } else {
        echo "Olá $nome, você tem $idade anos de idade e seu e-mail é $email.";
    }
} 


?>