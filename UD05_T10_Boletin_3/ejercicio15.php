<?php

$P1= $_POST ['P1'];
if ($P1 == "Si"){
    $R1=3;
}
$P2= $_POST ['P2'];
if ($P2 == "Si"){
    $R2=3;
}
$P3= $_POST ['P3'];
if ($P3 == "Si"){
    $R3=3;
}
$P4= $_POST ['P4'];
if ($P4 == "Si"){
    $R4=3;
}
$P5= $_POST ['P5'];
if ($P5 == "Si"){
    $R5=3;
}
$P6= $_POST ['P6'];
if ($P6 == "Si"){
    $R6=3;
}
$P7= $_POST ['P7'];
if ($P7 == "Si"){
    $R7=3;
}
$P8= $_POST ['P8'];
if ($P8 == "Si"){
    $R8=3;
}
$P9= $_POST ['P9'];
if ($P9 == "Si"){
    $R9=3;
}
$P10= $_POST ['P10'];
if ($P10 == "Si"){
    $R10=3;
}
$resultado= $R3+$R2+$R3+$R4+$R5+$R6+$R7+$R8+$R9+$R10;
    if ($resultado <= 10){
        echo "¡Enhorabuena! tu pareja parece ser totalmente fiel.";
    } elseif ($resultado > 11 && $resultado < 22 ) {
        echo "Quizás exista el peligro de otra persona en su vida o en su mente, aunque seguramente será algo sin importancia. No bajes la guardia.";
    } else {
        echo "Tu pareja tiene todos los ingredientes para estar viviendo un romance con otra persona. Te aconsejamos que indagues un poco más y averigües que es lo que está pasando por su cabeza.";
    }
?>