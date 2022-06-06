<?php

//para executar o get é preciso a estrutura if para confirmar que existe GET
if($_GET) {
  var_dump($_GET)['nome'];
}

var_dump($_GET);