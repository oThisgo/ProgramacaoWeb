<?php

function bemVindo(){
    return "Bem vindo ao sistema!";
}

echo bemVindo()."<hr>";

function welcome($nome){
    echo "Bem vindo $nome ao sistema!";
}

welcome("Thiago");
echo "<hr>";

$usuario = "Aligenígena";
welcome($usuario);
echo "<hr>";

function NotaFinal($n1, $n2, $n3, $aluno = ""){
    $NotaMedia = round(($n1 + $n2 + $n3)/3, 2);
    if ($NotaMedia >= 7) {
        $resultado = "O aluno $aluno está aprovado com média $NotaMedia.";
    } elseif ($NotaMedia <= 5) {
        $resultado = "O aluno $aluno está reprovado com média $NotaMedia.";
    } else {
        $resultado = "O aluno $aluno está em recuperação com média $NotaMedia.";
    }
    return $resultado;
}

$aluno = "Adamastor";
echo NotaFinal(9.5, 8.3, 6.2);
echo"<hr>";

$nome = "Dinosaurio";
$nome .= " da Silva";
echo $nome."<hr>";

function lista($lista = []){
    if (is_array($lista)) {
        if ( !empty($lista) ) {
            $resultado = "<ul>";
            foreach ($lista as $item) {
                $resultado .= "<li>$item</li>";
            }
            $resultado .= "</ul>";
        } else {
            $resultado = "Não há itens em sua lista.";
        }
    }else {
        $resultado = "É preciso passar um array para a função.";
    }
    return $resultado;
}

$animais = [
    "Carrocho",
    "Leonardo",
    "Moguerço",
    "Hitopópamo",
    "Paraguaio"
];
$animal = "Carajé";

echo lista($animais);

echo "<a href=\"form.php\">Atividade - Formulário</a>";
?>