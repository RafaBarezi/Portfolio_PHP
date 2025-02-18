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

// A diferença entre define e const é que conseguimos compor o nome da define durante o tempo de execução;

// Ambas são usuais mas quando se usa muitas a define costuma deixar a execução um pouco mais lenta.

// constantes devem estar em letra maiúscula. Elas não precisam do $ na precedencia.

?>