<?php

$total = 0;

for ($i = 1; $i <= 5; $i++) {

    $quantidade = readline("Digite a quantidade vendida no dia $i: ");

    $total = $total + $quantidade;
}

echo "Total vendido: " . $total . "\n";

?>
