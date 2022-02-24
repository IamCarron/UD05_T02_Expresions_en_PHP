
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <form action="ejercicio11.php" method="post">
        Escriba un número: <input type="text" name="N1"/><br />
        <input type="submit" name="enviar" value="!Enviar¡">
    <?php
        $numero= $_REQUEST['N1'];
        echo "<table>";
        echo "<tr>";
        echo "<td>Número</td>";
        echo "<td>Cadrado</td>";
        echo "<td>Cubo</td>";
        echo "</tr>";
        for( $i=$numero+1; $i<=$numero+5; $i++ )
        {
            $cuadrado= $i * $i;
            $cubo= $i * $i * $i;
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$cuadrado</td>";
            echo "<td>$cubo</td>";
            echo "</tr>";
        }       
        
    ?>
</body>
</html>