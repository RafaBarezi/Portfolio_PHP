<?php

// Arrays indexados

// No PHP todos os arrays tem valores indexados

# primeira defini��o de array indexado:
$cores = array (
		"azul",
		"amarelo",
		"verde",
		"vermelho"
);
// print_r($cores);

# segunda defini��o de array indexado:

$cores2 [10] = "azul";
$cores2 [11] = "amarelo";
$cores2 [12] = "verde";
$cores2 [13] = "vermelho";
// print_r($cores2);

# terceira defini��o de array indexado:

$cores3 [] = "azul";
$cores3 [] = "amarelo";
$cores3 [] = "verde";
$cores3 [] = "vermelho";
// print_r($cores3);

# quarta defini��o de array indexado:

$cores4 = [ 
		"azul",
		"amarelo",
		"verde",
		"vermelho"
];
print_r ( $cores4 );
