<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 4</title>
</head>
<body>
    <?php
        $horario=array(
            '8:50-9:40' => array('IAW','SAD','ASX','ASX','IAW'),
            '9:40-10:30' => array('IAW','SAD','EIEA','ASX','SRI'),
            '10:30-11:20' => array('SRI','SAD','EIEA','EIEA','SRI'),
            '11:20-12:00' => array('Recreo'),
            '12:00-12:50' => array('SRI','ASO','ASO','IAW','SAD'),
            '12:50-13:40' => array('ASO','ASO','IAW','IAW','SAD'),
            '13:40-14:30' => array('ASX','ASO','IAW','SRI','SAD'),
            '14:30-16:00' => array('Mediodía'),
            '16:00-16:50' => array('','SRI','','ASO',''),
            '16:50-17:40' => array('','SRI','','ASO',''),
            '17:50-18:30' => array('','SRI','','ASO',''),
        );

            echo "<table border='1'>";
            echo "<tr><th></th><th>Luns</th><th>Martes</th><th>Mercores</th><th>Xoves</th><th>Venres</th></tr>";
            foreach($horario as $hora => $modulos){
                echo "<tr>";
                echo "<th>".$hora."</th>";
                foreach($modulos as $m){
                    if(count($modulos)==1){
                        echo "<td colspan='5'>".$m."</td>";
                    }else{
                        echo "<td>".$m."</td>";
                    }
                }
        
                echo "</tr>";
            }
            echo "</table>";

    ?>
    
</body>
</html>
</body>
</html>