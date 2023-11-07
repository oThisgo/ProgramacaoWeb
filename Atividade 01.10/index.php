<?php

$notas = [8, 5, 6];

function media($valores = []){
    if (is_array($valores)) {
        if ( !empty($valores) ) {
            $mediafinal = (array_sum($valores))/count($valores);
            $resultado = "A média dos valores (".implode(", ",$valores).") será ".round($mediafinal, 2);
        } else {
            $resultado = "Sua lista está vazia.";
        }
    }else {
        $resultado = "É necessário passar uma lista de valores.";
    }
    return $resultado;
}

echo media($notas);

?>