<?php

$frutas = [
  'Laranja',//0
  'Banana',//1'
  'Abacaxi',//2
];

//adicionando nova fruta no array
$frutas[] = 'Maça';//3 irá ocupar o próximo index do maior index

$frutas[10] = 'Melancia';//10

$frutas[7] = 'Morango';//7

$frutas[] = 'Tangerina';//11 irá ocupar o próximo index do maior index(aqui o maior é 10 então será o 11)

?>

<ul>
  <li><?php echo $frutas[0]?></li>
  <li><?php echo $frutas[1]?></li>
  <li><?php echo $frutas[2]?></li>
  <li><?php echo $frutas[3]?></li>
  <li><?php echo $frutas[7]?></li>
  <li><?php echo $frutas[10]?></li>
  <li><?php echo $frutas[11]?></li>
</ul>
