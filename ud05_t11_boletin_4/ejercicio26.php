<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio26.php">
        <p>Escriba un número</p>
        <input type="text" name="numero" autofocus>
        <p>Inserte otro número</p>
        <input type="text" name="numero2" autofocus>
        <input type="submit" value="Enviar" >
    </form>
    <?php
        $num= $_REQUEST["numero"];
        $num2= $_REQUEST["numero2"];
        $numarray= str_split($num ,1);
        for ($i=0; $i < count($numarray); $i++) { 
            if ($num[$i] == $num2) {
                $pos = $pos."[".strval($i)."]";
            }
        }
        echo "<p>$num2 está en la posición $pos (Empiezan en 0)</p>";


    ?>
</body>
</html>

<!-- 1321468543213513151

split-> 

array('1','3','2','1')

for (..){
    if($dix==$oqbusco){
        imprimir
    }

}

0123456789

1


0 
3
11 -->