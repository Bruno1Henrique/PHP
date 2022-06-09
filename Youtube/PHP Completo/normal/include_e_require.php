<?php
//Irá mostrar o conteudo que está vindo de outra página
/*include ('index1.php');
//Irá mostrar o conteudo que está vindo de outra página, a diferença é que se não encontrar nada na página ele para de executar o arquivo
require ('index1.php');

//Dessa forma carrega somente uma vez o arquivo
include_once ('index1.php');
require_once ('index1.php');*/
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
    <!--IMPORTAR MENU-->
    <?php include('conteudo/menu.php'); ?>
     <!--IMPORTAR MIOLO-->
    <?php include('conteudo/miolo.php'); ?>
     <!--IMPORTAR RODAPE-->
    <?php include('conteudo/rodape.php'); ?>


</body>
</html>