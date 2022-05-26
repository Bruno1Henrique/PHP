<?php
    /*FILTROS DE VALIDACAO
    Funções (filter_input - filter_var)
    
    */
?>

<?php
    if(isset($_POST['enviar-formulario'])):
        $erros = array();

        /*FILTER VALIDATE INT*/
        if (!$idade = filter_input(INPUT_POST,'idade',FILTER_VALIDATE_INT)):
            $erros[] = "Idade precisa ser um inteiro";
        endif;
        
        /*FILTER VALIDATE EMAIL*/
        if (!$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)):
            $erros[] = "Email inválido";
        endif;

        /*FILTER VALIDATE FLOAT*/
        if (!$peso = filter_input(INPUT_POST,'peso',FILTER_VALIDATE_FLOAT)):
            $erros[] = "Peso precisa ser um float";
        endif;

        /*FILTER VALIDATE IP*/
        if (!$ip = filter_input(INPUT_POST,'ip',FILTER_VALIDATE_IP)):
            $erros[] = "IP inválido";
        endif;

        /*FILTER VALIDATE URL*/
        if (!$url = filter_input(INPUT_POST,'url',FILTER_VALIDATE_URL)):
            $erros[] = "URL inválida";
        endif;
        
        //EXIBINDO MENSAGENS
        if(!empty($erros)):
            foreach($erros as $erros):
                echo "<li>$erros</li>";
            endforeach;
        else:
            echo "Parabéns";
        endif;
    endif;
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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
       <p>Idade <input type="text" name="idade"></p>
       <p>Email: <input type="text" name="email"></p>
       <p>Peso: <input type="text" name="peso"></p>
       <p>IP: <input type="text" name="ip"></p>
       <p>URL: <input type="text" name="url"></p>
       <button type="submit" name="enviar-formulario">Enviar</button>

    </form>
</body>
</html>