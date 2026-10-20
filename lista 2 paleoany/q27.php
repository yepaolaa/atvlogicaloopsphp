<?php

$acima = 0;

for ($i = 1; $i <= 12; $i++) {

    $faltas = readline("Digite as faltas do aluno $i: ");

    if ($faltas <= 15) {

        echo "Aluno dentro do limite.\n";

    } else {

        echo "Aluno acima do limite.\n";

        $acima++;
    }
}

echo "Alunos que ultrapassaram o limite: " . $acima . "\n";

?>
