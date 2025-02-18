<?php

// Variáveis variáveis

// Serve para tornar o valor de uma variável o nome de outra variável dinamicamente
$varvar = "Teste";
$$varvar = 10;
echo $varvar . " " . $$varvar;
// arrays não podem seu usadas como variável variável

?>