<?php

$P1= $_POST ['P1'];
if ($P1 == "B"){
    $R1=1;
}
$P2= $_POST ['P2'];
if ($P2 == "B"){
    $R2=1;
}
$P3= $_POST ['P3'];
if ($P3 == "B"){
    $R3=1;
}
$P4= $_POST ['P4'];
if ($P5 == "B"){
    $R5=1;
}
$P6= $_POST ['P6'];
if ($P6 == "B"){
    $R6=1;
}
$P7= $_POST ['P7'];
if ($P7 == "B"){
    $R7=1;
}
$P8= $_POST ['P8'];
if ($P8 == "B"){
    $R8=1;
}
$P9= $_POST ['P9'];
if ($P9 == "B"){
    $R9=1;
}
$P10= $_POST ['P10'];
if ($P10 == "B"){
    $R10=1;
}
$P1= $_POST ['P1'];
if ($P1 == "B"){
    $R1=1;
}

$resultado= $R1+$R2+$R3+$R4+$R5+$R6+$R7+$R8+$R9+$R10;
echo "Su puntuación es $resultado";
?>