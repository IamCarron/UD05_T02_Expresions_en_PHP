<?php
    $numero1 = $_POST['N1'];
    $numero2 = $_POST['N2'];
    $numero3 = $_POST['N3'];
    $inta = intval($numero1);
    $intb = intval($numero2);
    $intc = intval($numero3);
    echo "<p>A: $inta B: $intb C: $intc</p>";
    $pow = pow($intb,2);
    $Cuatro_ac = 4*$inta*$intc;
    $raiz = sqrt($pow - $Cuatro_ac);
    echo "<p>POW: $pow</p>";
    echo "<p>4ac: $Cuatro_ac</p>";
    echo "<p>4ac: $raiz</p>";

    $resp=(-($intb)+sqrt(pow($intb,2)-(4*$inta*$intc)))/(2*$inta);
    $resn=(-($intb)-sqrt(pow($intb,2)-(4*$inta*$intc)))/(2*$inta);


    echo "<p>$resp</p>";
    echo "<p>x = ".round($resp,2)." || ".round($resn,2)."</p>";

?>