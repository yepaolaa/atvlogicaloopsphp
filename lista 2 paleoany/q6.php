<?php

$senha = 1234;

$tentativa = readline("Digite a senha: ");

while ($tentativa != $senha) {
    echo "Senha incorreta!\n";

    $tentativa = readline ("Digite novamente: ");
    
}

echo "Acesso permitido.";

?>