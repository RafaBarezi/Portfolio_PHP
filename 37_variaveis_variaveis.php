<?php

// Vari�veis vari�veis

// Serve para tornar o valor de uma vari�vel o nome de outra vari�vel dinamicamente
$varvar = "Teste";
$$varvar = 10;
echo $varvar . " " . $$varvar;
// arrays n�o podem seu usadas como vari�vel vari�vel

?>