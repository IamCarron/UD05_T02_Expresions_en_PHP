<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio27.php">
        <p>Escriba un número</p>
        <input type="text" name="numero" autofocus>
        <input type="submit" value="Enviar" >
    </form>
    <?php
        $arr=array();
        $num= $_REQUEST["numero"];
        for ($i=1; $i <= $num; $i++) {
            $mult = $i * 3;
            if ($mult > $num) {
                break;
            } else {
                array_push($arr,$mult);
                echo "$mult</br>";
            }
        }
        $total= count($arr);
        $suma= array_sum($arr);
        echo "Hay en total $total multiplos</br>";
        echo "La suma total es $suma</br>";

    ?>
</body>
</html>