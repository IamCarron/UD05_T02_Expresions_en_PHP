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
        $x = 0;
        while($x <= 100) {
            $mult= $x * 5;
            echo "<p>5*$x es = $mult</p>";
          $x+=1;
        }
    ?>
</body>
</html>