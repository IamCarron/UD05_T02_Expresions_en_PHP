<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (!isset($_SESSION["impares"])) {
        $_SESSION["impares"] = [];
    }
    if (!isset($_SESSION["numeros"])) {
        $_SESSION["numeros"] = [];
    }
    if (!isset($_REQUEST["N1"]) || $_REQUEST["N1"] > 0) {
        if (isset($_REQUEST["N1"])) {
            array_push($_SESSION["numeros"], $_REQUEST["N1"]);
        }
        if (!isset($_REQUEST["N1"]) || $_REQUEST["N1"] % 2!=0) {
            array_push($_SESSION["impares"], $_REQUEST["N1"]);
         } ?>
    <form action="ejercicio21.php" method="post">
        Escriba un número: <input type="text" name="N1" autofocus/><br />
        <input type="submit" name="enviar" value="!Enviar¡">
    </form>
    <?php
    } else {
        $sumarray = array_sum($_SESSION["numeros"]);
        $countarray = count($_SESSION["numeros"]);
        $calc = $sumarray / $countarray;
        echo "$countarray";
        echo "La media es $calc";
        print_r($_SESSION["impares"]);

        // borrar sesion
        $_SESSION = [];
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                "",
                time() - 42000,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }
        session_destroy();
    }
   
    ?>
</body>
</html>