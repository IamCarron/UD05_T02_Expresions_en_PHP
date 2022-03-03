<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio17.php" method="post">
        Número: <input type="text" name="N1" autofocus/><br />
        Número: <input type="text" name="N2" autofocus/><br />
        <input type="hidden" name="intentos" value="<?php echo $intentos; ?>" >
        <input type="submit" name="enviar" value="!Enviar¡">
    </form>
    <?php
        $N1=$_REQUEST["N1"];
        $N2=$_REQUEST["N2"];
        if($N1 < $N2) {
            $in=$N2+1;
            $fi=$N1;
            for($i=$in; $i <$fi;$i+=7){
                echo "$i</br>";
            }
        }elseif($N1 > $N2) {
            $in=$N2+1;
            $fi=$N1;
            for($i=$in; $i <$fi;$i+=7){
                echo "$i</br>";
            }
        } else{
            echo "Los numeros que acabas de introducir son iguales";
        }
    ?>
</body>
</html>
