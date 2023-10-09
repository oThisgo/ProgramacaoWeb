<?php

function triangulo($lado1, $lado2, $lado3){
    if ($lado1 == $lado2 && $lado2 == $lado3) {
        $resultado = "Triângulo equilátero";
    } elseif ($lado1 == $lado2 || $lado2 == $lado3 || $lado1 == $lado3) {
        $resultado = "Triângulo escaleno";
    } elseif ($lado1 != $lado2 && $lado2 != $lado3 && $lado1 != $lado3) {
        $resultado = "Triângulo isósceles";
    } 
    return $resultado;
}

echo triangulo($_GET['l1'], $_GET['l2'], $_GET['l3']);

?>