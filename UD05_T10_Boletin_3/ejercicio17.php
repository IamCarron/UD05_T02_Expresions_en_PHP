<?php
$number = $_POST['N1'];
if (strlen($number) > 5) {
    echo "Este numero es mayor a 5 digitos";
    }
    else {
        echo substr($number, 0 , 1);
    }

?>