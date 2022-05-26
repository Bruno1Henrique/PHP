<?php

    $soma = 1 + 1;
    $subtracao = 5-2;
    $divisao = 10 / 5;
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
    <p> 1 + 1 = <?=$soma?></p>
    <p> 5 - 2 = <?=$subtracao?></p>
    <p>10 / 5 = <?=$divisao?></p>
    <hr>
    <p><?=($soma / $divisao);?></p>
</body>
</html>