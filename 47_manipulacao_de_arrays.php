<?php

// Manipula��o de arrays

# Verifica se a instru��o � uma array
echo "fun��o: is_array" . "<br>";
echo "valor = [] - " . is_array ( [ ] ) . "<br>";
echo "valor = array - " . is_array ( array () ) . "<br>";
echo "valor = [1, 2, 3] - " . is_array ( [ 
		1,
		2,
		3
] ) . "<br>";
echo "<br>";

# Retorna a quantidade de elementos existentes na estrutura
echo "fun��o: count()" . "<br>";
echo "valor = [1,2,3,4] - " . count ( [ 
		1,
		2,
		3,
		4
] ) . "<br>";
echo "valor = range (0,1000) - " . count ( range ( 0, 1000 ) ) . "<br>";
echo "<br>";

# Verifica se o elemento est� contido
echo "fun��o: in_array(valor, array)" . "<br>";
echo "valor = in_array(2, [1,2,3,4,5] " . in_array ( 2, [ 
		1,
		2,
		3,
		4,
		5
] ) . "<br>";
echo "valor = in_array(6, [1,2,3,4,5] " . in_array ( 6, [ 
		1,
		2,
		3,
		4,
		5
] ) . "<br>";
// perguntamos se o elemento 6 est� contido no aaray (Falso)- N�o mostra a confirma��o 1
echo "<br>";

# Ordena��o
echo "fun��o: sort() " . "<br>";
$arr = [ 
		"c",
		"a",
		"b",
		"d"
];
sort ( $arr );
// ele � impresso de forma ordenada
print_r ( $arr );

echo "<br>";
echo "<br>";

# Inverso
echo "fun��o: array_reverse() " . "<br>";
$arr = [ 
		1,
		2,
		3,
		4
];
$arr = array_reverse ( $arr );

// ele � impresso de forma contr�ria
print_r ( $arr );
echo "<br>";
echo "<br>";

# Soma
echo "fun��o: array_sum() " . "<br>";
$arr = [ 
		1,
		2,
		3,
		4
];

// Soma os elementos da array
echo "A soma dos valores �: " . array_sum ( $arr );

echo "<br>";

# Jun��o de arrays
echo "fun��o: array_merge() " . "<br>";
$arr1 = [ 
		0,
		1,
		2,
		3,
		4
];
$arr2 = [ 
		"a",
		"b",
		"c",
		"d",
		"e"
];
$x = array_merge ( $arr1, $arr2 );
print_r ( $x );
echo "<br>";

?>