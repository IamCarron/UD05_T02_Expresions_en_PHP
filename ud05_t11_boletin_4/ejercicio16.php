<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<<<<<<< HEAD
        <form action="ejercicio16.php" method="post">
        Inserte un número: <input type="text" name="N1"/><br />
        <input type="submit" name="enviar" value="!Enviar¡">
    </form>
    <?php
$base = $_REQUEST['N1'];
for ($i = 1;$i <= $base;$i++)
{
    if (($base % $i) == 0)
    {
        $contador++;
    }
}
if ($contador < 3)
{
    echo "$base es un número primo.";
}
else
{
    echo "$base no es un número primo.";
}
?>
</body>
</html>
