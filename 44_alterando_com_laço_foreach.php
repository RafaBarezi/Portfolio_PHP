<?php

// Alteração e iteração de valores com o laço foreach

$nums = range ( 0, 10 );
# print_r($nums)

// Apenas o valor
foreach ( $nums as $chave => $valor ) {
	$valor *= 10;
	echo $valor . "<br>";
}
echo "<br>";

// Com referencia do elemento não a cópia
foreach ( $nums as $chave => &$valor ) {
	$valor *= 10;
	echo $valor . "<br>";
}

echo "<br>";
print_r ( $nums );

?>