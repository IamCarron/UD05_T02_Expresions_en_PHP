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
        
            $mult= $i * 5;
            echo "<p>5*$i es = $mult</p>";
            $i+=1;
        }
        
        while($i <= 100);
        
    ?>
</body>
</html>