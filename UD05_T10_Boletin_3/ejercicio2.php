<?php
    $resultado=explode(':',$_POST['N1']);
    if ($resultado[0] <= '12') {
        echo "Buenos días";
    } elseif ($resultado[0] <= '21') {
        echo "Buenas tardes";
    } else {
        echo "Buenas noches";
    }
?>
