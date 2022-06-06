<?php

$a1 = [
    'nome' => 'chiquim',
    'email' => 'chiquim@email.com',
    'telefone' => '62 9 9999-9999',
    'notas' => [
        9,
        8.9,
        7.5,
        6
    ],
];

$a2 = [
    'nome' => 'maria',
    'email' => 'maria@email.com',
    'telefone' => '62 9 9999-9999',
    'notas' => [
        9,
        8.9,
        7.5,
        6
    ],
];

$a3 = [
    'nome' => 'zezim',
    'email' => 'zezim@email.com',
    'telefone' => '62 9 9999-9999',
    'notas' => [
        9,
        8.9,
        7.5,
        6
    ],
];

$a4 = [
    'nome' => 'luiza',
    'email' => 'luiza@email.com',
    'telefone' => '62 9 9999-9999',
    'notas' => [
        9,
        8.9,
        7.5,
        6
    ],
];


$alunos = [
    $a1,
    $a2,
    $a3,
    $a4,
    ];
    
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container">
    <h1 class="mt-5">Alunos</h1>
    <hr>
<table class="table table-hover table-striped mt-5">
    <thead class="table-dark">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($alunos as $cadaAluno) {
            echo '<tr>';
            echo '<td>'  . $cadaAluno['nome'] . '</td>';
            echo '<td>'  . $cadaAluno['email'] . '</td>';
            echo '<td>'  . $cadaAluno['telefone'] . '</td>';
            echo '</tr>';
        }
    ?>
    </tbody>
</table>
</div>