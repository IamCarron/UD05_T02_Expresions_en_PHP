<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<<<<<<< HEAD
        <form action="ejercicio15.php" method="post">
        Base: <input type="text" name="N1"/><br />
        Exponente: <input type="text" name="N2"/><br />
        <input type="submit" name="enviar" value="!Enviar¡">
    </form>
    <?php
        $base= $_REQUEST['N1'];
        $exponente= $_REQUEST['N2'];
        if (!is_numeric($base) || !is_numeric($exponente) || $exponente < 0) {
            echo "Introduzca una base o un exponente positivo.";
        } else {
            for ($i=1; $i <= $exponente ; $i++) { 
                $calculo = pow($base,$i);
                echo "El resultado de: $base elevado a $i es: $calculo </br>";
            }
            
=======
    <form action="ejercicio15.php" method="post">
        Número: <input type="text" name="N1" autofocus/><br />
        Potencia: <input type="text" name="N2" autofocus/><br />
        <input type="hidden" name="intentos" value="<?php echo $intentos; ?>" >
        <input type="submit" name="enviar" value="!Enviar¡">
    </form>
    <?php
        $num = $_REQUEST["N1"];
        $pot = $_REQUEST["N2"];
        for ($i=0; $i <= $pot; $i++) { 
            $calculo = pow($num, $i);
            echo "$num elevado a $i=$calculo</br>";
>>>>>>> 3fc16295c026d7dd20ad65a6a217df97140f04a5
        }
    ?>
</body>
</html>