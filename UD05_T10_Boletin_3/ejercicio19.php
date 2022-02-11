<?php
$valorleido = $_POST['N1'];
$numinv = 0;
$cociente = $valorleido;
if (strlen($valorleido) > 5) {
    echo "Este numero es mayor a 5 digitos";
    }
    else{
        while ( $cociente != 0)
    {
    	$resto = $cociente % 10;
    	$numinv = $numinv * 10 + $resto;
    	$cociente = (int)($cociente / 10);
    }
    if ( $valorleido == $numinv )
    	echo "El $valorleido es capicua <br />";
    elseif (($valorleido % 2) == 0) {
        echo "El $valorleido es par";
    } else {
        echo "El $valorleido no es ni par ni capicua";
    }
    }

?>