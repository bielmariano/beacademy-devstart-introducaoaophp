<?php

$nome = "Alessandro";
$sobrenome = "Feitoza";
$idade = 100;
$cidade = "Fortaleza";

$nome2 = "Chiquim";
$nome2 .= "da Silva"; //Chiquimda silva


echo $nome ." " . $sobrenome;

echo "<br>";

echo  "Eu me chamo {$nome} {$sobrenome}, tenho {$idade} anos e moro em {$cidade}";
echo "<br>";
echo 'Eu me chamo {$nome} {$sobrenome}, tenho {$idade} anos e moro em {$cidade}';