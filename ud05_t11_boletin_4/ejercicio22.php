<?php
$num = 100;
$inicio = 2;
for ($j = $inicio; $j <= $num; $j++) {
    for ($k = $inicio; $k < $j; $k++) {
        if ($j % $k == 0) {
            break;
        }
    }
    if ($k == $j) {
        echo "Número primo : ", $j, "<br>"; 
    }
}
?>
