<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio24.php">
        <p>Escriba la altura que desea</p>
        <input type="text" name="numero">
        <input type="submit" value="Enviar" autofocus>
    </form>
    <?php
        $altura= $_REQUEST["numero"];
        for ($i=0; $i < $altura ; $i++) { 
            for ($a=0; $a < $i ; $a++) { 
                echo "*";
            }
            echo "</br>";
        }    
    ?>
</body>
</html>