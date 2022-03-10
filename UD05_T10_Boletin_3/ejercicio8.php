<?php
    $resultado = ($_POST['N1']+$_POST['N2']+$_POST['N3'])/3;
    if ($resultado <5) {
        echo "Insuficiente";
    } elseif ($resultado == 5) {
        echo "Suficiente";
    }
    elseif ($resultado ==6) {
        echo "Bien";
    }
    elseif ($resultado == 7) {
        echo "Notable";
    }
    elseif ($resultado == 8) {
        echo "Notable";
    }
    else {
        echo "Sobresaliente";
    }
?>