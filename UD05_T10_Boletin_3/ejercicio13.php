<?php
    $numeros= array($_POST['N1'],$_POST['N2'],$_POST['N3']);
    sort($numeros);
    $contar = count($numeros);
    for($x = 0; $x < $contar; $x++) {
    echo $numeros[$x];
    echo "<br>";
    }
?>