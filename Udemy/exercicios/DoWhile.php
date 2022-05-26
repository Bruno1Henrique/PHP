<?php
   /* $i = 1;

    do{
        echo "Número {$i}<br>";
        $i++;
    }while($i <=5);*/


?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title>Repetição FOR 2</title>
        <meta charset="utf-8" />
        <style>
            div{
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <?php
        $indice = 0;
        do {

            if ($indice == 2 || $indice == 6 || $indice == 10) {
                ?>
                <div style="background-color: #1E90FF"><?= $indice ?></div>
                <?php
            } else {
                ?>
                <div><?= $indice ?></div>
                <?php
            }
            $indice++;
        } while ($indice < 12);
        ?>
    </body>
</html>