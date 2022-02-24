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
    if($_REQUEST["intentos"]<=10){
    ?>
    <form action="ejercicio13.php" method="post">
        Escribas 10 números: <input type="text" name="N1" autofocus/><br />
        <input type="hidden" name="intentos" value="<?php echo $intentos; ?>" >
        <input type="submit" name="enviar" value="!Enviar¡">
    </form>
    <?php
    }else{

        print_r($_SESSION['numeros']);
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