<?php
    $cep = "89705110";
    $cep = str_replace("-","-", $cep);

    $str = file_get_contents("https://viacep.com.br/ws/$cep/json/");
    $arraycidade = json_decode($str);

    echo"<p><b>Cep: </b>". $arraycidade->cep."</p>";
    echo"<p><b>Logradouro: </b>". $arraycidade->logradouro."</p>";
    echo"<p><b>Bairro: </b>".$arraycidade ->bairro."</p>";
    echo"<p><b>Cidade: </b>".$arraycidade ->localidade."</p>";
    echo"<p><b>Estado: </b>".$arraycidade ->uf."</p>";
?>