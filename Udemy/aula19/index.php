<?php
    /*include("gravar.php");
    Gravar("Include", "file.txt");

    include("ler.php");
    $texto = Leitura("file.txt");
    echo $texto;*/

    require_once("gravar.php");
    Gravar("Include", "file.txt");

    echo "<br><h1>Olá Mundo</h1>";

    require("ler.php");
    $texto = Leitura("file.txt");
    echo $texto;

    echo "<br><h1>Teste</h1>";

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
    <h1>
        <?php
            echo Leitura("file.txt");
        ?>
    </h1>
</body>
</html>