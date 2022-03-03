<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio_19.php" method="post">
            <p><input type="text" name="num"></p>
            <p><select name="fill">
                <option selected value="asterisco.png">&#10036;&nbsp;Asterisco</option>
                <option value="diamante.png">&#128142;&nbsp;Diamante</option>
                <option value="dinero.png">&#128181;&nbsp;Dinero</option>
                <option value="trueno.png">&#9889;&nbsp;Trueno</option>
                <option value="escudo.png">&#128304;&nbsp;Escudo</option>
            </select></p>
            <p><input type="submit" value="Calcular"></p>
        </form>
        <?php
        $num=$_REQUEST["num"];
        $altura=$_REQUEST["fill"];
        for ($i=0; $i < $altura; $i++) { 
            for ($j=0; $j <= $i; $j++) { 
                echo "<img src=imgs/".$fill." height='24'>";
            }
            echo "<br />";      
        }
        ?>
</body>
</html>