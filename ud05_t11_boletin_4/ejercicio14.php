<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio14.php" method="post">
        Número: <input type="text" name="N1" autofocus/><br />
        Potencia: <input type="text" name="N2" autofocus/><br />
        <input type="hidden" name="intentos" value="<?php echo $intentos; ?>" >
        <input type="submit" name="enviar" value="!Enviar¡">
    </form>
    <?php
        $num = $_REQUEST["N1"];
        $pot = $_REQUEST["N2"];
        $calculo = pow($num, $pot);
        echo "El resultado es: $calculo";
    ?>
</body>
</html>