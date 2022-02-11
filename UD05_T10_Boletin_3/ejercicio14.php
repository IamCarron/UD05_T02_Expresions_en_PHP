<?php
    $num= $_POST['N1'];
        if (($num % 2) == 0) {
            echo "Este numero es par";
        } elseif (($num % 5) == 0) {
            echo "Este numero es divisble entre 5";
        } else {
            echo "Este numero no es ni par ni divisible entre 5";
        }

?>