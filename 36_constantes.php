<?php

// Constantes

define("teste", 10);
echo teste."<br>";

// ou podemos usar const:

for($x = 0; $x < 5; $x ++)
	define ( "CONSTANTE" . $x, $x );
echo CONSTANTE0 . "<br>";
const valor = 1000;

echo "<br>" . valor;

// A diferen�a entre define e const � que conseguimos compor o nome da define durante o tempo de execu��o;

// Ambas s�o usuais mas quando se usa muitas a define costuma deixar a execu��o um pouco mais lenta.

// constantes devem estar em letra mai�scula. Elas n�o precisam do $ na precedencia.

?>