<?php

$frutas= [
  'Banana',
  'Tangerina',
  'Abacate',
  'Jaca',
];

foreach($frutas as $posicao => $cadaFruta) {
  echo "Posição {$posicao} | Frutas: {$cadaFruta}" . PHP_EOL;
}