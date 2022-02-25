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
    $intentos = intval(isset($_REQUEST["intentos"])?$_REQUEST["intentos"]+1:0);
    if (isset($_REQUEST["N1"])) {
        array_push($_SESSION["numeros"], $_REQUEST["N1"]);
    } ?>
    <?php
    if($_REQUEST["intentos"] < 9){
    ?>
    <form action="ejercicio13.php" method="post">
        Escribas números: <input type="text" name="N1" autofocus/><br />
        <input type="hidden" name="intentos" value="<?php echo $intentos; ?>" >
        <input type="submit" name="enviar" value="!Enviar¡">
    </form>
    <?php
    
    echo "$intentos";
    print_r($_SESSION["numeros"]);
}else{
        $pos= 0;
        $neg=0;
        while ($i <= count($_SESSION["numeros"]) ) {
            if ($_SESSION["numeros"][$i]>=0) {
                $hola= $_SESSION['numeros'][$i];
                echo "$hola";
                $pos++;
            }else{
                $hola= $_SESSION['numeros'][$i];
                echo "$hola";
                $neg++;
            }
            $i++;
        }
        echo "$intentos </br>";
        print_r($_SESSION["numeros"]);
        echo "Tienes $pos numeros positivos</br>";
        echo "Tienes $neg numeros negativos";
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