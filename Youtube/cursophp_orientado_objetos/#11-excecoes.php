<?php
//Ocorrencia anormal que afeta aplicacao

class Newsletter{
    public function cadastrarEmail($email){
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            throw new Exception("Este email é inválido",1);
        else:
            echo "Email cadastrdo com sucesso";
        endif;
    }
}


$newsletter = new Newsletter();

try{
$newsletter->cadastrarEmail("contato@");
} catch(Exception $e) {
    echo "Mensagem: ".$e->getMessage()."<br>";
    echo "Código: ".$e->getCode()."<br>";
    echo "Linha: ".$e->getLine()."<br>";
    echo "Arquivo: ".$e->getFile()."<br>";
}