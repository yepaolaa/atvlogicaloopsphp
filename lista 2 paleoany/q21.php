<?php

$total = 0;

for ($i = 1; $i <= 7; $i++) {

    $consumo = readline("Digite o consumo do dia $i em litros: ");

    $total = $total + $consumo;
}

echo "Consumo total: " . $total . " litros\n";

?>
