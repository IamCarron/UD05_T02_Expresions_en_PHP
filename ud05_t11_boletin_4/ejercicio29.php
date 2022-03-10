<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio29.php">
        <p>Escriba un número</p>
        <input type="text" name="numero" autofocus>
        <p>Inserte otro número</p>
        <input type="text" name="numero2" autofocus>
        <input type="submit" value="Enviar" >
    </form>
    <?php
        $num= $_REQUEST["numero"];
        $num2= $_REQUEST["numero2"];
        if ((!is_int($num) || $num < 0) || (!is_int($num2) || $num2 < 0)) {
            echo "Los números tienen que ser ambos positivos";
        } else {
        for ($i=1; $i < $num; $i++) { 
            if ($i % $num2 != 0) {
                echo "$i";
            }
        }
    }

    ?>
</body>
</html>