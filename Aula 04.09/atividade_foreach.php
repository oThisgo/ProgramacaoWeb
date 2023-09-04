<?php

$alunos = [
    [
        "Nome" => "Thiago",
        "Curso" => "ADS",
        "Nota" => "D"
    ],
    [
        "Nome" => "Vitor",
        "Curso" => "SPI",
        "Nota" => "A"
    ],
    [
        "Nome" => "Henry",
        "Curso" => "ADS",
        "Nota" => "Z"
    ],
    [
        "Nome" => "William",
        "Curso" => "Moda",
        "Nota" => "A+"
    ],
    [
        "Nome" => "Yasmin",
        "Curso" => "PMM",
        "Nota" => "B"
    ]

];

foreach ($alunos as $aluno) {
    echo "O aluno ".$aluno["Nome"]." do curso de ".$aluno["Curso"]." tirou nota ".$aluno["Nota"].".<br>";
}

?>