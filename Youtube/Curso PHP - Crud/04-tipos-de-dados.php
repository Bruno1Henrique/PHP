<?php
    /***Escalares***/
    //String

    $nome = "123";
    var_dump($nome);
    
    if(is_string($nome)):
        echo "é uma string";
    else:
        echo "Não é uma string";
    endif;

    echo "<hr>";

    //Int

    $idade = 22.1;
    var_dump($idade);
   
    if(is_int($idade)):
        echo "é um inteiro";
    else:
        echo "Não é um inteiro";
    endif;

    echo "<hr>";

    //Float

    $altura = 1.77;
    var_dump($altura);
    
    if(is_float($altura)):
        echo"é um float";
    else:
        echo"Não é um float";
    endif;

    echo "<hr>";

    //Boolean

    $admin = true;
    var_dump($admin);

    if(is_bool($admin)):
        echo "é um booleano";
    else:
        echo"Não é um booleano";
    endif;

    echo "<hr>";
    
    /***Composto***/

    //Array

    $carros = array("Gol","Uno","Camaro",12,20.6,true);
    var_dump($carros);

    //Object

    class Cliente{
        public $nome;
        public function atribuirNome($nome){
            $this->$nome = $nome;
        }
    }

    $cliente = new Cliente();
    $cliente->atribuirNome("Henrique");
    var_dump($cliente);

    if(is_object($cliente)):
        echo"é um objeto";
    else:
        echo"Não é um objeto";
    endif;

    echo "<hr>";

    /***Especiais***/

    //NULL

    $cidade = null;
    var_dump($cidade);

    //Resources

    echo "<hr>";

    $data = 12.7;

    echo gettype($data), "\n";

?>