<?php

$opcao = -1;

while  ($opcao != 0) {

    echo "1 - Cadastrar aluno\n";
    echo "2 - Consultar aluno\n";
    echo "3 - Excluir aluno\n";
    echo "0- Sair\n";

    $opcao = readline("Escolha uma opcao: ");

if ($opcao == 1) {
        echo "Cadastrar aluno\n";
} elseif ($opcao == 2) {
    echo "Consultar aluno\n";
} elseif ($opcao == 3) {
    echo "Excluir aluno\n";
} elseif ($opcao == 0) {
    echo "Saindo... \n";
} else {
    echo "Opcao invalida!\n";
}

}

?>