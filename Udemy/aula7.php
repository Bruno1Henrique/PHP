<?php
    $msg = "";

    switch (9){
        case 1:
            $msg = "Dia 1";
            break;
        case 2:
            $msg = "Dia 2";
            break;
        case 3:
            $msg = "Dia 3";
            break;
        case 4:
            $msg = "Dia 4";
            break;
        case 5:
            $msg = "Dia 5";
            break;
        default:
            $msg = "Nao encontrado";
    }
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
    <p>Olá hoje é dia <?=$msg;?></p>
</body>
</html>