<?php

$secreto = 50;

$numero = readline("Tente adivinhar o numero: ");

while ($numero != $secreto) {

    if ($numero > $secreto) {
        echo "O numero  digitado eh maior.\n";
    } 
}