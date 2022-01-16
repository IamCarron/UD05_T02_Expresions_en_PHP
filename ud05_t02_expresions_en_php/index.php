<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Operadores aritméticos
$x=10;
$y=3;
$z=$x*$y;
echo $x." x ".$y." = ".$z."<br/>";
$z=$x%$y;
echo $x." módulo ".$y." = ".$z."<br/>";
/*Operadores de asignación*/
$z-=$y;
echo "\$z-=\$y asigna a \$z".$z."<br/>";
$z+=$y;
echo "\$z+=\$x asigna a \$z".$z."<br/>";
 // Operadores de incremento/diminución
 ++$z;
 echo "++\$z asigna a \$z".$z."<br/>";
 $z--;
 echo "\$z-- asigna a \$z".$z."<br/>";
 /*Operadores de comparación*/
 $z=$x!=$y;
 echo "\$x!=\$y devolve ".$z."<br/>";
 $z=$y>$x;
 echo "\$y>\$x devolve ".$z."<br/>";
?>

</body>
</html>