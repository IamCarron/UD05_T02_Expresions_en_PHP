<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio25.php">
        <p>Escriba un número</p>
        <input type="text" name="numero">
        <input type="submit" value="Enviar" autofocus>
    </form>
    <?php
        $num= $_REQUEST["numero"];
        $reves= strrev($num);
        echo "$num al reves es $reves";  
    ?>
</body>
</html>