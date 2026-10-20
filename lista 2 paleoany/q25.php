<?php

$soma = 0;
$maior = 0;

for ($i = 1; $i <= 7; $i++) {

    $temperatura = readline("Digite a temperatura do dia $i: ");

    $soma = $soma + $temperatura;

    if ($i == 1 || $temperatura > $maior) {
        $maior = $temperatura;
    }
}

$media = $soma / 7;

echo "Temperatura média: " . $media . "\n";
echo "Maior temperatura: " . $maior . "\n";

?>
