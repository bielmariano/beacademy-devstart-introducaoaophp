<?php
$bandas = [
  'Dream theater',//0
  'Neo Pi Geo',//1
  'ExaltaSamba',//2
  'Iron Maiden',//3
  'Aviões do Forró',//4
];

$bandas[100] = 'Nirvana';
$bandas[10] = 'Calcinha Preta';

$bandas[2] = 'Turma do pagode';//2 substitui o array[2]

echo '<ul>';

foreach($bandas as $cadaBanda) {
  echo '<li>' . $cadaBanda . '</li>';
}


echo '</ul>';