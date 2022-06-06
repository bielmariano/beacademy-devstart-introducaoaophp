<?php

declare(strict_types=1);

function mostrarNomes(array $nomes): void {
  foreach ($nomes as $cadaNome) {
    echo "nome: " . $cadaNome . PHP_EOL;
  }
}

mostrarNomes(['Joaqim', 'Luzia', 'Carol']);