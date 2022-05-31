<?php

$pasta = "nova-pasta/imagem";

//COMANDO PARA CRIAR PASTA
if(!is_dir($pasta)){
    mkdir($pasta,0755,true);
}else{
    rename($pasta,'imagem');
    //reanme($pasta,'zap');
    //rmdir($dir);
}