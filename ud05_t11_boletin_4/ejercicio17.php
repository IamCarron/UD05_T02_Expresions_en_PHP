<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="ejercicio17.php" method="post">
        Inserte un número: <input type="text" name="N1"/><br />
        <input type="submit" name="enviar" value="!Enviar¡">
    </form>
    <?php
$base = $_REQUEST['N1'];
$inicio= $base +1;
$fin= $base+100;

if ($base > 0 || is_int($base)) {
    for ($i=$inicio; $i <= $fin; $i++) { 
        $caluclo = 0 + $i;
    }
    echo "El resultado es $caluclo";
} else {
    echo "Introduzca un número entero y positivo.";
}
?>
</body>
</html>
