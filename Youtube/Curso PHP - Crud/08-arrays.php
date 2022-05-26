<?php
    //Arrays numéricos
    $carros = array(1=>'BMW',2=>'Veloster',3=>'Hillux'); //Ordenando os indices
    $carros[] = "Amarok";
    $carros[10] = "Camaro";
   
    print_r($carros); //Exibe todos os valores do array
    
    echo "<hr>";
    echo $carros[10];

     //COUNT - Contado os registros do Array
    echo "<hr>";
    echo count($carros);

    echo "<hr>";
    $motos = array();
    $motos [] = "YAMAHA";
    $motos [] = "HONDA";
    $motos [5] = "SUZUKI";
    
    echo $motos[5];

    //COUNT - Contado os registros do Array e atribuindo uma variavel a ele
    $totalMotos = count($motos);
    echo "<br>";
    echo 'O total de motos é '.$totalMotos.'';
    
    //print_r($motos);

    echo "<hr>";


    $clientes = ["Henrique","Filipe","Bia"];
    print_r($clientes);
    echo "<hr>";

    //COUNT
    $totalClientes = count($clientes);
    echo $totalClientes;
    echo "<hr>";

    //FOREACH
    foreach ($motos as $valor){
        echo $valor ."<br>";
    }

    echo"<hr>";

    //Arays Associativos
    $pessoa = array("nome"=>"Henrique","idade"=>22,"altura"=>1.75);
    $pessoa["cidade"] = "Itabuna";
    //print_r($pessoa);
    //echo $pessoa ["idade"];

    foreach($pessoa as $indice => $valor){
        echo $indice.":".$valor."<br>";

    }
    echo"<hr>";
    
    //Arrays multidimensionais
    $times=array
            ("cariocas"=>array("campeao"=>"vasco","vice"=>"flamengo","terceiro"=>"botafogo"),
            "paulistas"=>array("Santos","São Paulo","Palmeiras"),
            "baianos"=>array("Bahia","Vitóris","Itabuna")
            );
            
    echo $times["paulistas"][1];
    echo "<br>";

    foreach($times["cariocas"] as $indice => $valor){
        echo $indice.":".$valor."<br>";
    }
?>