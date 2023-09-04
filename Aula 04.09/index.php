<?php 

$profissoes = [
    "advogado",
    "arquiteto",
    "engenheiro",
    "médico"
];

foreach ($profissoes as $profissionais) {
    echo $profissionais." ";
};
echo "<hr>";

$profissoes[] = "dentista";

foreach ($profissoes as $profissionais) {
    echo $profissionais." ";
};
echo "<hr>";

$thisgo = [
    "Nome" => "Thiago Schiedeck",
    "Idade" => "18 anos",
    "Naturalidade" => "Santa Cruz do Sul"
];

$thisgo["Profissão"] = "Não tem kkkkkk";

foreach ($thisgo as $thithi => $indice) {
    echo $thithi.": ".$indice." ";
};

echo "<hr>";

echo array_pop($profissoes)."<hr>";
echo array_shift($profissoes)."<hr>";

foreach ($profissoes as $profissionais) {
    echo $profissionais." ";
};

echo "<hr>";

array_push($profissoes, "dentista", "advogado");

foreach ($profissoes as $profissionais) {
    echo $profissionais." ";
};

echo "<hr>";

$element = "Santa Cruz do Sul";
if (in_array($element, $thisgo)){
    echo 'Oi amigão, tem "'.$element.'" nessa variável sim :)';
};
echo "<hr>";

 // só soma quando um número em string quando ele está no começo;
$values = [10, 11, "5tago", "28.1vitor10", 18.9, 20, 32];
echo array_sum($values);
echo "<hr>";

asort($profissoes);
print_r($profissoes);
echo "<hr>";
arsort($profissoes);
print_r($profissoes);
echo "<hr>";
ksort($thisgo);
print_r($thisgo);
echo "<hr>";
krsort($thisgo);
print_r($thisgo);
echo "<hr>";
echo "Possuimos vagas para as seguintes profissões: ".implode(", ", $profissoes).".";
echo "<hr>";
$frase = "pão de queijo, pão de batata, pastel, cachorro, churros";
$lanches = explode(", ", $frase);
print_r($lanches);
?>