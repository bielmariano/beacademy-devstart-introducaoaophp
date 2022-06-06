<?php

$idade = 16;

echo $idade >= 18 ? "de maior" : "de menor";
echo "<br>";

echo isset($nome) ? $nome : 'nome não definido';

echo $nome ?? 'nome não definido';
/* linha 10 faz exatamente o que a 8 faz. se a variável $nome existir então escreve 'nome não definido'.*/