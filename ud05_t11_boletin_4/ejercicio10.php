<?php
    session_start();
?>
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

    $numeros = array();
    $_SESSION["numeros"]=$numeros;
    if(!isset($_REQUEST["N1"]) || $_REQUEST["N1"]>0){

        if(isset($_REQUEST["N1"])){
            array_push($_SESSION["numeros"],$_REQUEST["N1"]);
        }
    ?>
    <form action="ejercicio10.php" method="post">
        Escriba un número: <input type="text" name="N1"/><br />
        <input type="submit" name="enviar" value="!Enviar¡">
    </form>
    <?php
    }else{
        /*calcular media */
    }
    ?>
</body>
</html>