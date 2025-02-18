<?php

// Estrutura foreach

/*

É uma estrutura de repetição especializada

A performance é a mesma que a for mas a foreach ajuda a melhorar a legibilidade e evita problemas, como acessar um elemento não contido em uma lista, com uma chave inexistente, sem índice definido.

>>> O elemento é atribuido á variável valor

>>> O bloco de instrução será executado

A cada elemento do array execute esse bloco de instrução a cada ciclo :

foreach(<array> as <valor>) ou :

foreach(<array> as <chave> => <valor>)

*/

$lista = [ 
		"Domingo",
		"Segunda",
		"Terça",
		"Quarta",
		"Quinta",
		"Sexta",
		"Sábado"
];

/*

for($x=0; $x<count($lista); $x++){
echo"$x: $lista[$x]<br>";}

*/

// 1° notação foreach:
foreach ( $lista as $item ) {
	echo "$item<br>";
}
echo "<br><br>";

// 2° notação foreach:
foreach ( $lista as $chave => $valor ) {
	echo "$chave : $valor <br>";
}

?>