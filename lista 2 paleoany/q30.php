<?php

$valor = readline("Digite o valor do saque: ");

$notas10 = 0;
$notas2 = 0;

for ($i = 0; $i <= $valor / 10; $i++) {

    $valor10 = $i * 10;
    $resto = $valor - $valor10;

    if ($resto >= 0 && $resto % 2 == 0) {

        $notas10 = $i;
        $notas2 = $resto / 2;
    }
}

if (($notas10 * 10 + $notas2 * 2) == $valor) {

    echo "Notas de R$ 10: " . $notas10 . "\n";
    echo "Notas de R$ 2: " . $notas2 . "\n";

} else {

    echo "O saque não pode ser realizado com o valor exato.\n";
}

?>
