<?php

// Estrutura foreach

/*

� uma estrutura de repeti��o especializada

A performance � a mesma que a for mas a foreach ajuda a melhorar a legibilidade e evita problemas, como acessar um elemento n�o contido em uma lista, com uma chave inexistente, sem �ndice definido.

>>> O elemento � atribuido � vari�vel valor

>>> O bloco de instru��o ser� executado

A cada elemento do array execute esse bloco de instru��o a cada ciclo :

foreach(<array> as <valor>) ou :

foreach(<array> as <chave> => <valor>)

*/

$lista = [ 
		"Domingo",
		"Segunda",
		"Ter�a",
		"Quarta",
		"Quinta",
		"Sexta",
		"S�bado"
];

/*

for($x=0; $x<count($lista); $x++){
echo"$x: $lista[$x]<br>";}

*/

// 1� nota��o foreach:
foreach ( $lista as $item ) {
	echo "$item<br>";
}
echo "<br><br>";

// 2� nota��o foreach:
foreach ( $lista as $chave => $valor ) {
	echo "$chave : $valor <br>";
}

?>