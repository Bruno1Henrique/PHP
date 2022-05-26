<?php
    $nomes = array("Primo"=>"Rodrigo","Vizinho"=>"Felipe","Mãe"=>"Maria","Pai"=>"José");
    
    //echo in_array("Rodrigo", $nomes);
   
    // is array
    //if(is_array($nomes)):
    //cho is_array($nomes);
     //   echo "é um array";
    //else:
    //    echo "não é um array";
    //endif;

    //$keys = array_keys($nomes);
    //print_r($keys);
    
    //$values = array_values($nomes);
    //rint_r($values);

   
   //Junta o conteudod e dois arrays
    //$carros = array("Camaro","Uno","Gol");
    //$motos = array("POP100","50cc","CB1000");

    //$veiculos = array_merge($carros, $motos);

    //print_r($veiculos);

    //Exclui o ultimo valor do array
    //$carros = array("Camaro","Uno","Gol");
    //print_r($carros);
    //echo"<br>";
    //array_pop($carros);
    //print_r($carros);

    //Exclui o primeiro registro do array
    //$carros = array("Camaro","Uno","Gol");
    //array_shift($carros);
    //print_r($carros);

    //Push adiciona os dados no final do array, unshift adiciona no inicio
    //$frutas = array("Uva","Laranja","Maça");
    //print_r($frutas);
    //echo"<br>";
    //array_push($frutas, "Manga","Acerola","Morango");
    //print_r($frutas);

    //Junta o elemento de dois arrays
    //$keys = array("Campeão","Vice","Terceiro");
    //$values = array("Vasco","Flamengo","Botafogo");
    //$times = array_combine($keys, $values);
    //print_r($times);

    //Soma o valor do arrays
    //$soma = array(5,6,10,8);
    //echo array_sum($soma);

    $data = "30/02/2018";
    $novaData = explode('/',$data);
    print_r($novaData);
    
    echo"<br>";

    $frase = "Meu nome não é Jonny";
    $array = explode(" ",$frase);
    print_r($array);

    echo"<br>";

    $nomes = array("Rodrigo","Carlos","Neusa","Talita");

    $string = implode(",", $nomes);
    echo $string;

?>