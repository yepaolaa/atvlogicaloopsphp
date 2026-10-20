<?php

for ($i = 1; $i <= 8; $i++) {

    $valor = readline("Digite o valor da compra do pedido $i: ");

    if ($valor >= 300) {

        $frete = 0;

    } elseif ($valor >= 150) {

        $frete = 15;

    } else {

        $frete = 25;
    }

    echo "Frete do pedido $i: R$ " . $frete . "\n";
}

?>
