<?php

/*$pasta = "arquivos/";

if (!is_dir($pasta)){
    mkdir($pasta,0755,true);
}

$nome_arquivo = date('y-m-d-H-i-s').".txt";
//echo $nome_arquivo;

$arquivo = fopen('teste.txt','a+');
fwrite($arquivo,'uma linha injetado pelo PHP' .PHP_EOL);
fwrite($arquivo,'uma linha injetado 2' .PHP_EOL);
fwrite($arquivo,'uma linha injetado 3' .PHP_EOL);
fclose($arquivo);

$caminhoArquivo = $pasta.$nome_arquivo;

if(file_exists($caminhoArquivo) && is_file($caminhoArquivo)){
    echo file_get_contents($caminhoArquivo);
}

if(is_dir($pasta)){
    foreach(scandir($pasta) as $arquivo){
        $caminho = $pasta.$arquivo;
        if(is_file($caminho)){
            unlink($caminho);
        }
    }

    rmdir($pasta);
}

copy('teste.txt','teste2.txt');*/

$arquivo = "teste.html";
$titulo = "<h1>Henrique</h1>";
file_put_contents($arquivo,'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>'
    .$titulo.
'</body>
</html>

');
