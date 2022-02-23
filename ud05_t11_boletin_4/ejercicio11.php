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
    if (!isset($_SESSION["numeros"])) {
        $_SESSION["numeros"] = array();
    }
    $COUNT= intval(isset($_REQUEST["num"])?$_REQUEST["num"]+1:0);
    if (!isset($_REQUEST["N1"]) || ($_REQUEST["N1"] >= 1 && $COUNT < 5))  {
        if (isset($_REQUEST["N1"])) {
            array_push($_SESSION["numeros"], $_REQUEST["N1"]);
        } ?>
        <form action="ejercicio11.php" method="post">
        <input type="text" name="num" value="<?php echo $COUNT; ?>" >
        Escriba un número: <input type="text" name="N1"/><br />
        <input type="submit" name="enviar" value="!Enviar¡">
    </form>
    <?php
    } else {

     $numeros=$_SESSION['numeros'];
     print_r($numeros);
     $solucion = 1;
     echo "<table>";
     echo "<tr>";
     echo "<td>Número</td>";
     echo "<td>Cadrado</td>";
     echo "<td>Cubo</td>";
     echo "</tr>";
         for ($i=0; $i < count($numeros) ; $i++) { 
            $solucion = $numeros[$i] * $numeros[$i];
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$i</td>";
            echo "<td>$solucion</td>";
            echo "</tr>";
         }
         echo "</table>";
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