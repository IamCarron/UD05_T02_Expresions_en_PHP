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
        <input type="submit" value="Enviar" >
    </form>
    <?php
        $num= $_REQUEST["numero"];
        for ($i=1; $i <= $num; $i++) {
            $mult = $i * 3;
            if ($mult > $num) {
                break;
            } else {
                echo "<p>$mult</p>";
            }
        }


    ?>
</body>
</html>