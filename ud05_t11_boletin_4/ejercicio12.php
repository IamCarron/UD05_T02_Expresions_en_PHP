<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="ejercicio12.php" method="post">
        Escriba un número: <input type="text" name="N1"/><br />
        <input type="submit" name="enviar" value="!Enviar¡">
    </form>
    <?php
        $fibCero=0;
        $fibUno=1;
            $numeros=$_REQUEST['N1'];
          for ($i=2; $i <$numeros ; $i++) { 
              $fibActual = $fibCero+$fibUno;
              echo "$fibActual </br>";
              $fibCero=$fibUno;
              $fibUno=$fibActual;
            }
    ?>
</body>
</html>