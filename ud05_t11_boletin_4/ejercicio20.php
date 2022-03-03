<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio20.php" method="post">
            <p><input type="text" name="num"></p>
            <p><input type="submit" value="Calcular"></p>
        </form>
        <?php
        $num=$_REQUEST["num"];
        echo "<pre>";
        echo "* <br/>";
        for ($i = 1; $i <= $num; $i++) {
            for ($h = $i; $h <= $i; $h++) {
                $espacio .="&nbsp";
            }
            echo "*";
            echo  $espacio."* <br/>";
        }
        for ($i=0; $i <=$num ; $i++) { 
            echo "*";
        }
        echo "</pre>";
        ?>
</body>
</html>