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
        Número: <input type="text" name="N1" autofocus/><br />
        <input type="hidden" name="intentos" value="<?php echo $intentos; ?>" >
        <input type="submit" name="enviar" value="!Enviar¡">
    </form>
    <?php
        $num=$_REQUEST["N1"];
        $inicio=$num + 1;
        $limite=$num + 100;
        $res=0;
        if (!is_numeric($num) || $num < 0) {
            echo "El dato que introduciste o no es valido o es un número negativo";
        } else {
            for ($i=$inicio; $i <= $limite; $i++) { 
                $calculo=$calculo + $i;
            }
            echo "La suma es: $calculo";
        }   
    ?>
</body>
</html>