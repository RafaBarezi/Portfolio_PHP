<?php

echo"<h1>Script em looping</h1>",

# Dizemos que um programa está em looping quando deixa de responder e fica congelado até o tempo de execução do script:

$num = 0;

while ( $num < 100 ) {
	$num = $num - 5;
	echo $num . "\n";
}
