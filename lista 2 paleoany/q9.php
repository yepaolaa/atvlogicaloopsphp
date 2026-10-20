<?php

$soma = 0;

$numero = readline("Digite um numero: ");

while ($numero != 0) {

    $soma = $soma + $numero;

    $numero = readline("Digite outro numero: ");

}

echo "Soma: " . $soma;

?>