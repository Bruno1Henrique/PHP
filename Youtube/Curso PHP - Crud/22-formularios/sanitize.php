<?php
    /*FILTROS SANITIZE
    
    */
?>

<?php
    if(isset($_POST['enviar-formulario'])):
        $erros = array();

        $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
        
        $idade = filter_input(INPUT_POST,'idade',FILTER_SANITIZE_NUMBER_INT);
        if(!filter_var($idade,FILTER_VALIDATE_INT)):
            $erros[] = "Idade precisa ser um inteiro";
        endif;

        $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)):
            $erros[] = "Email precisa ser inteiro";
        endif;

         $url = filter_input(INPUT_POST,'url',FILTER_SANITIZE_URL);
         if(!filter_var($url, FILTER_VALIDATE_URL)):
            $erros[] = "Precisa ser URL valida";
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
       <p>Nome: <input type="text" name="nome"></p>
       <p>Idade <input type="text" name="idade"></p>
       <p>Email: <input type="text" name="email"></p>
       <p>URL: <input type="text" name="url"></p>
       <button type="submit" name="enviar-formulario">Enviar</button>

    </form>
</body>
</html>