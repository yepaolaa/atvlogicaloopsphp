<?php

$numero = readline("Digite um número: ");

$fatorial = 1;

for ($i = 1; $i <= $numero; $i++) {

    $fatorial = $fatorial * $i;
}

echo "Fatorial: " . $fatorial . "\n";

?>
