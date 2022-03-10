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
        if (isset($_REQUEST["N1"])) {
        array_push($_SESSION["numeros"], $_REQUEST["N1"]); 
        $sumarray = array_sum($_SESSION["numeros"]);
        echo $sumarray;
    }if ($sumarray <= 9999) {
      ?>  <form action="ejercicio23.php" method="post">
      Escriba un número: <input type="text" name="N1" autofocus/><br />
      <input type="submit" name="enviar" value="!Enviar¡">
  </form>
  <?php 
    
   } else if(isset($_REQUEST["N1"])){
        $sumarray = array_sum($_SESSION["numeros"]);
        $count = count($_SESSION["numeros"]);
        $calculo= $sumarray /  $count;
        echo "La medía total de los números es: $calculo";
       
        // borrar sesion
        $_SESSION = array();
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