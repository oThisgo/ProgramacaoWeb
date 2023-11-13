<?php

if (isset($_POST['enviar']) && is_numeric($_POST['largura']) && is_numeric($_POST['comprimento'])) {
    $largura = $_POST['largura'];
    $comprimento = $_POST['comprimento'];
    $ambiente = $_POST['ambiente'];
    $area = $largura * $comprimento;

    if ($ambiente == 'residencial') {
        if ($area <= 14) {
            echo "Para sua área $ambiente de $area m², aconselhamos um ar condicionado de 7.000 BTUs";
        } elseif ($area <= 19) {
            echo "Para sua área $ambiente de $area m², aconselhamos um ar condicionado de 9.000 BTUs";
        } elseif ($area <= 24) {
            echo "Para sua área $ambiente de $area m², aconselhamos um ar condicionado de 12.000 BTUs";
        } elseif ($area <= 29) {
            echo "Para sua área $ambiente de $area m², aconselhamos um ar condicionado de 15.000 BTUs";
        } elseif ($area <= 34) {
            echo "Para sua área $ambiente de $area m², aconselhamos um ar condicionado de 18.000 BTUs";
        } elseif ($area <= 39) {
            echo "Para sua área $ambiente de $area m², aconselhamos um ar condicionado de 21.000 BTUs";
        } elseif ($area <= 44) {
            echo "Para sua área $ambiente de $area m², aconselhamos um ar condicionado de 24.000 BTUs";
        } elseif ($area <= 49) {
            echo "Para sua área $ambiente de $area m², aconselhamos um ar condicionado de 27.000 BTUs";
        } elseif ($area <= 59) {
            echo "Para sua área $ambiente de $area m², aconselhamos um ar condicionado de 30.000 BTUs";
        } elseif ($area <= 69) {
            echo "Para sua área $ambiente de $area m², aconselhamos um ar condicionado de 36.000 BTUs";
        } elseif ($area >= 70) {
            echo "Para sua área $ambiente de $area m², aconselhamos um ar condicionado de 42.000 BTUs";
        }
    } elseif ($ambiente == 'comercial') {
        if ($area <= 11) {
            echo "Para sua área $ambiente de $area m², aconselhamos um ar condicionado de 7.000 BTUs";
        } elseif ($area <= 14) {
            echo "Para sua área $ambiente de $area m², aconselhamos um ar condicionado de 9.000 BTUs";
        } elseif ($area <= 19) {
            echo "Para sua área $ambiente de $area m², aconselhamos um ar condicionado de 12.000 BTUs";
        } elseif ($area <= 24) {
            echo "Para sua área $ambiente de $area m², aconselhamos um ar condicionado de 16.000 BTUs";
        } elseif ($area <= 29) {
            echo "Para sua área $ambiente de $area m², aconselhamos um ar condicionado de 20.000 BTUs";
        } elseif ($area <= 34) {
            echo "Para sua área $ambiente de $area m², aconselhamos um ar condicionado de 24.000 BTUs";
        } elseif ($area <= 39) {
            echo "Para sua área $ambiente de $area m², aconselhamos um ar condicionado de 28.000 BTUs";
        } elseif ($area <= 44) {
            echo "Para sua área $ambiente de $area m², aconselhamos um ar condicionado de 32.000 BTUs";
        } elseif ($area <= 49) {
            echo "Para sua área $ambiente de $area m², aconselhamos um ar condicionado de 36.000 BTUs";
        } elseif ($area <= 59) {
            echo "Para sua área $ambiente de $area m², aconselhamos um ar condicionado de 40.000 BTUs";
        } elseif ($area <= 69) {
            echo "Para sua área $ambiente de $area m², aconselhamos um ar condicionado de 48.000 BTUs";
        } elseif ($area >= 70) {
            echo "Para sua área $ambiente de $area m², aconselhamos um ar condicionado de 56.000 BTUs";
        }
    }

} else {
    echo "Responda o formulário corretamente!";
}

?>