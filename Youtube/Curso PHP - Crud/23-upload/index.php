<?php
    if(isset($_POST['enviar'])):
        $formatosPermitidos = array("png","jpeg","gif");
        $quantidadeArquivos = count($_FILES['arquivo']['name']);
        $contador = 0;
        while($contador < $quantidadeArquivos):

            $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);

            if(in_array($extensao, $formatosPermitidos)):
                $pasta = "arquivos/";
                $temporario = $_FILES['arquivo']['tmp_name'][$contador];
                $novoNome = uniqid().".$extensao";

                    if(move_uploaded_file($temporario,$pasta.$novoNome)):
                        echo "Upload feito com sucesso para $pasta.$novoNome<br>";
                    else:
                        echo "Erro ao enviar $temporario";
                    endif;
                else:
                    echo "$extensao não é permitida";
            endif;
        endwhile;
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


    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo[]" multiple><br>
        <input type="submit" name="enviar">
    </form>

</body>
</html>