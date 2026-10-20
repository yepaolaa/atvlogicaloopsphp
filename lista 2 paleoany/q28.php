<?php

$pequenos = 0;
$medios = 0;
$grandes = 0;

for ($i = 1; $i <= 10; $i++) {

    $peso = readline("Digite o peso do lote $i em gramas: ");

    if ($peso < 100) {

        echo "Lote pequeno.\n";
        $pequenos++;

    } elseif ($peso <= 200) {

        echo "Lote médio.\n";
        $medios++;

    } else {

        echo "Lote grande.\n";
        $grandes++;
    }
}

echo "Lotes pequenos: " . $pequenos . "\n";
echo "Lotes médios: " . $medios . "\n";
echo "Lotes grandes: " . $grandes . "\n";

?>
