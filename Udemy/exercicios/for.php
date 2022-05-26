<?php

/*Crie uma repetição utilizando o for que exiba na tela o valor do índice
atual, como por exemplo: Índice 1, índice 2... índice 9.
   
    for ($i = 0; $i <=20; $i++){
        echo "Indice {$i}<br>";
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
             for ($i = 0; $i <=30; $i++){
                ?>
                <li><?= ($i * 30); ?></li>
                <?php
            }
        ?>
    </ul>
</body>
</html>