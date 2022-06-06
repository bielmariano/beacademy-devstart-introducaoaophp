<?php
//nome preço descrição foto

$sabonete = [
  'nome' => 'sabonete',
  'preco' => '3.99',
  'descricao' => 'essa é a descricao do produto 1',
  'foto' => 'essa é a foto do produto 1',
];

$lapis = [
  'nome' => 'lapis',
  'preco' => '1.50',
  'descricao' => 'essa é a descricao do produto 2',
  'foto' => 'essa é a foto do produto 2',
];

$borracha = [
  'nome' => 'borracha',
  'preco' => '4.25',
  'descricao' => 'essa é a descricao do produto 3',
  'foto' => 'essa é a foto do produto 3',
];

$papel = [
  'nome' => 'papel',
  'preco' => '0.20',
  'descricao' => 'essa é a descricao do produto 4',
  'foto' => 'essa é a foto do produto 4',
];


$produtos = [
  $sabonete, $lapis, $borracha, $papel,
];


?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container">

<h1 class="mt-5">Produtos</h1>
<hr>
<table class="table table-hover table-striped mt-5">
  <thead class="table-dark">
    <tr>
      <th>Nome</th>
      <th>Preço</th>
      <th>Descrição</th>
      <th>Foto do produto</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
      foreach($produtos as $produto) {
        echo '<tr>';
        echo '<td>' . $produto['nome'] . '</td>';
        echo '<td>' . $produto['preco'] . '</td>';
        echo '<td>' . $produto['descricao'] . '</td>';
        echo '<td>' . $produto['foto'] . '</td>';
        echo '</tr>';
      }
      ?>
    </tr>
  </tbody>
</table>

</div>