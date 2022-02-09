<?php
    $resultado=$_POST['N1'];
    if ($resultado == 1) {
        echo "Lunes";
    } elseif ($resultado == 2) {
        echo "Martes";
    } elseif ($resultado == 3) {
        echo "Miércoles";
    } elseif ($resultado == 4) {
        echo "Jueves";
    } elseif ($resultado == 5) {
        echo "Viernes";
    } elseif ($resultado == 6) {
        echo "Sábado";
    } else {
        echo "Domingo";
    }
?>
