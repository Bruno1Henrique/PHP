<?php
    $idade = 17;
    $senha = 1234;
    $acesso = false;

   /* if($idade >= 18){
        echo "OK";
    }else{
        echo "NO OK";
    }*/

    /*if($senha == "123"){
        echo "Autorizado";
    }else if ($senha == "1234"){
        echo "Autonizado Nivel 2";
    }else{
        echo "Não autorizado";   
    }*/

    /*|| = um ou outro precisa ser verdadeiro, && = os dois precisam ser verdadeiros*/ 

    /*if (($idade > 18) || ($senha != "1234")){ 
        echo "Autorizado N2";
    }else{
        echo "Nao autorizado";
    }*/
/*
    if($acesso == true){
        echo "okay";
    }else{
        echo "invalido";
    }
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .aut{
            color: green;
        }

        .not-aut{
            color: red;
        }
    </style>
</head>
<body>
<?php
    if($idade >= 18){
        echo "<h1 class=\"aut\">Autorizado</h1>";
    }else{
        echo "<h1 class=\"not-aut\">Nao autorizado</h1>";
    }
?>

<h1 class="aut"></h1>
</body>
</html>