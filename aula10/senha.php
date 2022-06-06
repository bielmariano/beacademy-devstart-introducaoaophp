<?php
$senha = '123456';
// $code = 'MTIzNDU2';

// echo base64_encode($senha) . PHP_EOL; // MTIzNDU2
// echo base64_encode($code) . PHP_EOL; // 123456

// echo md5($senha) . PHP_EOL; // da mesma forma sempre irá transformar a mesma senha em uma mesma outra senha.

echo password_hash($senha, PASSWORD_ARGON2I) . PHP_EOL;