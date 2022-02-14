<?php
    $pass= 3456;
    $test= $_POST['N1'];
    if ($pass == $test) {
        echo "Lo siento, esa no es la combinación. Te quedan $intentos";
    } else {
        echo "La caja fuerte se ha abierto satisfactoriamente";
    }

?>