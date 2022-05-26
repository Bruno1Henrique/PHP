<?php
$senha = "123456";

/*$novasenha = base64_encode($senha);

echo "base64: " .$novasenha. "</br>";
echo "Sua senha é:". base64_decode($novasenha);

echo "<hr>";

echo "Md5: " .md5($senha). "<br>";
echo "Sha1: ".sha1($senha);*/

$options = [
    'cost' => 100,
];

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);

echo $senhaSegura;
?>