<?php
/*São variaveis que já vem definidas em PHP
$GLOBALS
$_SERVER
*/

//Definindo uma variavel como global para poder usar dentro de uma funcao
/*$a = 10;
$b = 20;

function soma(){
    //$GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
    global $a, $b, $c;
    $c = $a + $b;
}

soma();
echo $c;*/

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];