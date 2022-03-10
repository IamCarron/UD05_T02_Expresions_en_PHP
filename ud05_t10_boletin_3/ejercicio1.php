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
    $horario=array(
        'lunes' => array('IAW',),
        'martes' => array('SAD'),
        'miercoles' => array('ASX'),
        'jueves' => array('ASX'),
        'viernes' => array('IAW'),
        );
        foreach($horario as $row){
            if($row['id']==4){
             print($row['value']);
            }
           }
    ?>
</body>
</html>