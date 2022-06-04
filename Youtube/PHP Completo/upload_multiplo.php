<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="containter">
        <h1 class="mt-5 text-center">Upload de arquivos</h1>
        <form class="m-3" method="POST" enctype="multipart/form-data">
            <div class="input-group">
                <input type="file" class="form-control" name="arquivo[]" id="arquivo" multiple  aria-describedby="arquivo" aria-label="Upload" required>
                <button class="btn btn-primary" type="submit" name="enviar" id="enviar">Enviar</button>
            </div>
        </form>
    </div>

    <?php
        function reArrayFiles(&$file_post) {

            $file_ary = array();
            $file_count = count($file_post['name']);
            $file_keys = array_keys($file_post);
        
            for ($i=0; $i<$file_count; $i++) {
                foreach ($file_keys as $key) {
                    $file_ary[$i][$key] = $file_post[$key][$i];
                }
            }
        
            return $file_ary;
        }
        

        if(isset($_POST['enviar'])){
            //echo "<pre>";
           // var_dump($_FILES);
            //echo "</pre>";
            $arquivoArray = reArrayFiles($_FILES['arquivo']);

            foreach ($arquivoArray  as $arquivo){

                            //VALIDACOES
            $tamanhoMax = 15000000;
            $permitido = array("jpg","png","jpeg","mp4");
            $extensao = pathinfo($arquivo ['name'],PATHINFO_EXTENSION);

            //VERIFICAR SE TEM TAMANHO PERMITIDO
            if($arquivo['size'] >= $tamanhoMax){
                echo '<div class="alert alert-danger" role="alert">
                Tamanho máximo de 2 MB, não foi possível fazer upload
              </div>';
            }else{
                //VERIFICAR SE EXTENSAO É PERMITIDA
                if(in_array($extensao, $permitido)){
                    //echo "Permitido";
                    $pasta = "Imagens/";
                    if(!is_dir($pasta)){
                        mkdir($pasta,0755);
                    }

                    $tmp = ($arquivo['tmp_name']);
                    $novoNome = uniqid().".$extensao";

                    if(move_uploaded_file($tmp,$pasta.$novoNome)){
                        echo '<div class="alert alert-success" role="alert">
                        Upload realizaddo com sucesso
                      </div>';
                    }else{
                        echo "Não foi possível fazer upload";
                    }
                }else{
                    echo '<div class="alert alert-danger" role="alert">
                   Extensão ('.$extensao.') não permitida
                  </div>';
                }
            }
        }
    }
    ?>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>