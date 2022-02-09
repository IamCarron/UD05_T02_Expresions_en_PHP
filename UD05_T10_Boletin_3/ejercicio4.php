<?php
    $resultado=$_POST['N1'];
    $normal= $resultado * 12;
    $mayor=$resultado * 16;
    if ($resultado <= 40){
     echo "Su salario es: $normal";
    } else {
        echo "Su salario es: $mayor";
    }
    ?>