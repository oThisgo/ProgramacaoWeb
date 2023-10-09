<?php
$linguagens = [ 'php', 'html', 'css', 'javascript', 'jquery', 'python', 'sql', 'bootstrap', 'java', 'c++', 'fluter' ];
$linguagem = $_POST['linguagem'];

if (isset($linguagem) && !empty($linguagem)) {
    if (in_array(strtolower($linguagem), $linguagens)) {
        echo "Encontramos o curso de ".strtoupper($linguagem)." que você busca!";
    } else {
        echo "Não encontramos o curso $linguagem. :(";
    }
} else {
    echo "Digite o nome do curso corretamente.";
}

?>