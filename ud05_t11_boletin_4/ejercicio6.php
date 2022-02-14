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
        $i = 0;

        do{
        
            $mult= $i * 20;
            $o= 320 - $mult;
            echo "<p>$o</p>";
            $i+=1;
        }
        
        while($i <= 8);
        
    ?>
</body>
</html>