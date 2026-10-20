<?php

$aluno = 1;
$soma = 0;

while ($aluno <= 5) {

    $nota = readline("Digite a nota do aluno $aluno: ");

    $soma = $soma + $nota;
    
    $aluno++;
}

echo "Soma das notas: " . $soma;

?>