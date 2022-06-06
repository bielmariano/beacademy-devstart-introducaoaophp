<?php

$nome = 'alessandro';// Alessandro
$sobrenome = 'FEITOZA';//Feitoza

$nome2 = 'chiquim da silva';//Chiquim Da Silva

echo "Nome: " . ucfirst($nome) . PHP_EOL; //uc is for upper case

echo "Sobrenome " . ucfirst(strtolower($sobrenome)) . PHP_EOL; //string to lowercase

echo "Nome2: " . ucwords($nome2);