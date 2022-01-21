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
    $palabras = array(
        'only' => 'solo',
        'then' => 'entonces',
        'could' => 'puede',
        'good' => 'bueno',
        'people' => 'personas',
        'make' => 'hacer',
        'about' => 'acerca de',
        'from' => 'desde',
        'if' => 'si',
        'which' => 'cual',
    );

    echo "<table border='1'>";
    foreach ( $palabras as $ingles => $castellano ){
        echo "<tr><td>".$ingles."</td><td>".$castellano."</td></tr>";
    }

    echo "</table>";
    ?>
</body>
</html>