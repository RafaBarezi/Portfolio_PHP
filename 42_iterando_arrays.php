<?php

// Iterando arrays

$lista = [ 
		"domingo ",
		"segunda ",
		"ter�a ",
		"quarta ",
		"quinta ",
		"sexta ",
		"s�bado"
];

// mostra a quantidade de elementos do array
$quantidade = count ( $lista ); 
// echo $quantidade;

for($x = 0; $x < $quantidade; $x ++) {
	echo $x . " : " . $lista [$x] . "<br>";
}

?>