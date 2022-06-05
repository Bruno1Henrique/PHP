<?php

setcookie('nome','Henrique',time()+(86400 * 30));

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
    <h1>Cookie 🍪</h1>

    <?php /*if(isset($_COOKIE['nome'])){
        $nome = $_COOKIE['nome'];
        echo "O nome do cookie é $nome";
    }else{
       echo "Não tem nenhum cookie";
    }*/
    if(count($_COOKIE) > 0){
        echo "tem cookies";
    }else{
        echo "Não tem cookies";
    }
    
    ?>
</body>
</html>