<?php

$idade = $_GET['age'];
$genero = $_GET['gender'];
$uf = $_GET["UF"];

if ($idade >= 18 && $uf == "RS" or $uf == "SC") {
    echo "Maior de idade";
    echo "<br>";
    echo strtoupper($genero);
    echo "<br>";
    echo "Sulista";
} else {
    echo "Menor de idade";
    echo "<br>";
    echo strtoupper($genero);
    echo "<br>";
    echo "Não é sulista";
}

echo "<hr>";

$nota_media = ($_GET['nota1'] + $_GET['nota2'] + $_GET['nota3']) / 3;

if ($nota_media >= 9) {
    echo "Média = ".number_format((float)$nota_media, 2, '.', '')." - Nota A (Aprovado).";
} elseif ($nota_media >= 8 && $nota_media <= 8.9) {
    echo "Média = ".number_format((float)$nota_media, 2, '.', '')." - Nota B (Aprovado).";
} elseif ($nota_media >= 7 && $nota_media <= 7.9) {
    echo "Média = ".number_format((float)$nota_media, 2, '.', '')." - Nota C (Aprovado).";
} else {
    echo "Média = ".number_format((float)$nota_media, 2, '.', '')." - Nota D (Reprovado).";
}

echo "<hr>";

$lado1 = $_GET['lado1'];
$lado2 = $_GET['lado2'];
$lado3 = $_GET['lado3'];

if ($lado1 == $lado2 && $lado1 == $lado3) {
    echo "Triângulo Equilátero";
} elseif ($lado1 != $lado2 && $lado1 != $lado3 && $lado2 != $lado3) {
    echo "Triângulo Escaleno";
} else {
    echo "Triângulo Isósceles";
}


echo '<hr>';

$aluno = strtoupper($_GET['aluno']);

switch ($aluno) {
    case 'THIAGO':
        echo "Gay";
        break;
    case 'VITOR':
        echo "Muito gay";
        break;
    case 'WILLIAM':
        echo "Extremamente gay";
        break;
    case 'HENRY':
        echo "Indescritivelmente gay";
        break;
    default:
        echo "Macho demais";
        break;
}

echo '<hr>';

switch ($idade) {
    case $idade < 18:
        echo "Menor";
        break;
    case $idade < 60:
        echo "Adulto";
        break;
    case $idade >= 60:
        echo "Idoso";
        break;
    default:
        echo "Que idade é essa amigão???";
        break;
}

echo '<hr>';

$dia = strtoupper($_GET['dia']);
$teste = $dia == "DOMINGO" ? "Sem aula" : "Tenho aula";
echo $teste." ".strtolower($dia);

echo '<hr>';
$funcionarios = [
    [
        "funcionario" => "Thiago",
        "acesso" => "A"
    ],
    [
        "funcionario" => "Henry",
        "acesso" => "B"
    ],
    [
        "funcionario" => "Vitor",
        "acesso" => "C"
    ],
    [
        "funcionario" => "William",
        "acesso" => "D"
    ]
];

foreach ($funcionarios as $funcionario) {
    if ($funcionario['acesso'] == "A" or $funcionario['acesso'] == "B") {
        echo "O funcionário ".$funcionario['funcionario']." tem acesso a este sistema.<br>";
    } else{
        echo "O funcionário ".$funcionario['funcionario']." não tem acesso a este sistema.<br>";
    }
}

?>