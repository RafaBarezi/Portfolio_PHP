<?php

// Altera��o e itera��o de valores com o la�o foreach

$nums = range ( 0, 10 );
# print_r($nums)

// Apenas o valor
foreach ( $nums as $chave => $valor ) {
	$valor *= 10;
	echo $valor . "<br>";
}
echo "<br>";

// Com referencia do elemento n�o a c�pia
foreach ( $nums as $chave => &$valor ) {
	$valor *= 10;
	echo $valor . "<br>";
}

echo "<br>";
print_r ( $nums );

?>