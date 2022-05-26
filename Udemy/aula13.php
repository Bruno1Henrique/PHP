<?php
 /*  function Ola($nome, $email){
        return "Olá, meu nome é: {$nome} e meu e-mail {$email}";
    }

    echo Ola("Henrique","henrique@compufour.com");*/

    function Ajuste($p1, $p2){
        return (($p1 * $p2) / 4);
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
    <h1><?=Ajuste(3,10);?></h1>
</body>
</html>