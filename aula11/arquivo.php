<?php

// a+ é para leitura e escrita.
// se o arquivo não existir, ele é criado
$arquivo = fopen('produtos.csv','a+');

//escreve no arquivo, com o PHP_EOL ficando um em cada linha
fwrite($arquivo, 'Alessandro' . PHP_EOL);
fwrite($arquivo, 'Bruno' . PHP_EOL);
fwrite($arquivo, 'Luiza' . PHP_EOL);

fclose($arquivo);