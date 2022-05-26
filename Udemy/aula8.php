<?php

    /*cont = 0;
    while ($cont < 10) {
        echo "cont ($cont)<br>";
        $cont++;
    }*/

    /*$cont = 10;
    while ($cont > 0) {
        echo "cont ($cont)<br>";
        $cont--;
    }*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <ul>
            <?php
                $cont = 0;
                while ($cont < 30) {
                    if ($cont > 5 && $cont <=20) {
                        ?>
                        <li><?="$cont<br>"; ?></li>
                        <?php
                    }
                        $cont++;
                }
                ?>
        </ul>
</body>
</html>
