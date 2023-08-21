<?php 

include_once 'Database/db.php';

$sql = "SELECT * FROM dias";
$resultado = mysqli_query($db,$sql);

$semana = [
    "Domingo",
    "Segunda",
    "Terça",
    "Quarta",
    "Quinta",
    "Sexta",
    "Sábado"
];

for ($i=0; $i < 11; $i+=2) {
    echo $i.'<br>';
}

echo '<hr>';

$a = 0;
while ($a <= 6) {
    echo $semana[$a].'<br>';
    $a++;
}

echo '<hr>';

for ($z=0; $z < count($semana); $z++) {
    echo $semana[$z].'<br>';
}

foreach ($semana as $sigla) {
    echo $sigla;
}

echo "<hr>";

$clientes = [

    [
        "nome" => "Fulano",
        "telefone" => "51 99999",
        "cidade" => "Canoas"
    ],

    [
        "nome" => "Ciclano",
        "telefone" => "51 444444",
        "cidade" => "Gravataí"
    ],

    [
        "nome" => "Jahpodi Aomossar",
        "telefone" => "51 777777",
        "cidade" => "Aomosso"
    ]

];

for ($i=0; $i < 3; $i++) { 
    echo " - " . $clientes[$i]['nome'] . "<br>";
}

echo '<hr>';

foreach ($clientes as $cliente) {
    echo $cliente['nome'].' - '.$cliente['telefone'].' - '.$cliente['cidade'].'<br>';
}

$x = 1;
while ($x <= 5) {
    echo "<h$x>Título $x<h$x>";
    $x++;
}

?>