<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio28.php">
        <p>Escriba un número</p>
        <input type="text" name="numero" autofocus>
        <input type="submit" value="Enviar" >
    </form>
    <?php
        $num= $_REQUEST["numero"];
        $factorial = 1; 
        for ($i = 1; $i <= $num; $i++){ 
          $factorial = $factorial * $i; 
        } 
        echo "La factorial de $num es $factorial";
    ?>
</body>
</html>