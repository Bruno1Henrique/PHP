<?php
function loadClass($nomeClasse){
    $pasta = __DIR__ . '/class/' . $nomeClasse . '.php';
    if(is_file($pasta)){
        require($pasta);
    }
}

spl_autoload_register('loadClass');