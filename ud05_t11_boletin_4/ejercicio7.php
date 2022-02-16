<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletín03_T01</title>
</head>
<body>
    <?php
    $intentos = intval(isset($_REQUEST["intentos"])?$_REQUEST["intentos"]+1:0);
    ?>

    <?php
    if($_REQUEST["intentos"]<6){
    ?>
    
    <form action="ejercicio7.php" method="post">
        Escriba una combinación: <input type="text" name="N1"/><br />
        <input type="hidden" name="intentos" value="<?php echo $intentos; ?>" >
        <input type="submit" name="enviar" value="!Enviar¡">
    </form>


    <?php
    }
    ?>
    <?php
    
    $pass= 3456;
    $test= $_POST['N1'];
    if ($pass == $test){
        echo "La caja fuerte se ha abierto satisfactoriamente";
    } elseif ($intentos >= '5') {
        echo "As superado el número máximo de intentos permitidos llevas: $intentos";
    } else {
        echo "Lo siento, esa no es la combinación";
    }
?>
</body>
</html>