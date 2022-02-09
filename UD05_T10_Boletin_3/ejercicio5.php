<?php
$a = $_POST['N1'];
$b = $_POST['N2'];
    if (!is_numeric($a) || !is_numeric($b)) {
        echo "<p>Inserta los valores</p>";
    } elseif ($a == 0) {
        echo "Esa ecuación no tiene solución real.";
    } else {
        echo "x = ", (-$b / $a);
    }
?>