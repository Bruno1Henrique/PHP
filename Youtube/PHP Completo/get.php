<?php
/*$_GET
if (isset($_GET['nome'])){
    $nome = $_GET['nome'];
}else{
    $nome = "Mundo!";
}

if (isset($_GET['cor'])){
    $cor = $_GET['cor'];
}else{
    $cor = 'white';
}*/



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <!--<h1>Olá, <?php echo $nome ?></h1>

    <a href="get.php?nome=Maria&cor=green">Ir para Maria <br></a>
    <a href="get.php?nome=Pedro&cor=yellow">Ir para Pedro <br></a>-->

    <form method="get" action="recebe_get.php">
        <input type="text" name = "nome" placeholder="Digite seu nome aqui"><br><br>
        <input type="text" name = "idade" placeholder="Digite sua idade aqui"><br>
        <hr><button type="submit">Enviar</button>        
    </form>
</body>
</html>