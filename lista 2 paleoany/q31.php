<?php

$modelos = readline("Digite a quantidade de modelos: ");
$testes = readline("Digite a quantidade de testes por modelo: ");

$maiorMedia = 0;
$modeloMaior = 0;

for ($modelo = 1; $modelo <= $modelos; $modelo++) {

    $soma = 0;

    echo "Modelo " . $modelo . "\n";

    for ($teste = 1; $teste <= $testes; $teste++) {

        $nota = readline("Digite a nota do teste $teste: ");

        if ($nota < 50) {

            echo "Resultado: baixo\n";

        } elseif ($nota <= 79) {

            echo "Resultado: moderado\n";

        } else {

            echo "Resultado: alto\n";
        }

        $soma = $soma + $nota;
    }

    $media = $soma / $testes;

    echo "Média do modelo " . $modelo . ": " . $media . "\n";

    if ($modelo == 1 || $media > $maiorMedia) {

        $maiorMedia = $media;
        $modeloMaior = $modelo;
    }
}

echo "Modelo com maior média: Modelo " . $modeloMaior . "\n";
echo "Maior média: " . $maiorMedia . "\n";

?>
