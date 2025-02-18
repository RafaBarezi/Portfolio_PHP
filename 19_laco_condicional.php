<?php

echo"<h1>Laço condicional</h1>";

echo"Elas existem para repetir os blocos por determinadas quantidades de vezes<br>";

$x = 10;
if($x <= 20);
{
    echo "<br>Se $x = 10, então x é menor que 20<br>";
}

$y = 4;

echo"<br>A seguir temos um laço de repetição while: entre 5 e 15:<br><br>";
while ( $y <= 14 ) {
	$y = $y + 1; # Incrementando uma unidade cada vez que o laço for executado
	echo $y . '<br>'; 	# concatenção com uma quebra de linha -> símbolo:

}
