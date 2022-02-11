<?php
$number = $_POST['N1'];
$contar = strlen(abs($number));
if (strlen($number) > 5) {
    echo "Este numero es mayor a 5 digitos";
    }
    else {
        echo "Este número tiene $contar digitos";
    }
?>