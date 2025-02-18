<?php

// Iterando arrays

$lista = [ 
		"domingo ",
		"segunda ",
		"terça ",
		"quarta ",
		"quinta ",
		"sexta ",
		"sábado"
];

// mostra a quantidade de elementos do array
$quantidade = count ( $lista ); 
// echo $quantidade;

for($x = 0; $x < $quantidade; $x ++) {
	echo $x . " : " . $lista [$x] . "<br>";
}

?>