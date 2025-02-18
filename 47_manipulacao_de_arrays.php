<?php

// Manipulação de arrays

# Verifica se a instrução é uma array
echo "função: is_array" . "<br>";
echo "valor = [] - " . is_array ( [ ] ) . "<br>";
echo "valor = array - " . is_array ( array () ) . "<br>";
echo "valor = [1, 2, 3] - " . is_array ( [ 
		1,
		2,
		3
] ) . "<br>";
echo "<br>";

# Retorna a quantidade de elementos existentes na estrutura
echo "função: count()" . "<br>";
echo "valor = [1,2,3,4] - " . count ( [ 
		1,
		2,
		3,
		4
] ) . "<br>";
echo "valor = range (0,1000) - " . count ( range ( 0, 1000 ) ) . "<br>";
echo "<br>";

# Verifica se o elemento está contido
echo "função: in_array(valor, array)" . "<br>";
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
// perguntamos se o elemento 6 está contido no aaray (Falso)- Não mostra a confirmação 1
echo "<br>";

# Ordenação
echo "função: sort() " . "<br>";
$arr = [ 
		"c",
		"a",
		"b",
		"d"
];
sort ( $arr );
// ele é impresso de forma ordenada
print_r ( $arr );

echo "<br>";
echo "<br>";

# Inverso
echo "função: array_reverse() " . "<br>";
$arr = [ 
		1,
		2,
		3,
		4
];
$arr = array_reverse ( $arr );

// ele é impresso de forma contrária
print_r ( $arr );
echo "<br>";
echo "<br>";

# Soma
echo "função: array_sum() " . "<br>";
$arr = [ 
		1,
		2,
		3,
		4
];

// Soma os elementos da array
echo "A soma dos valores é: " . array_sum ( $arr );

echo "<br>";

# Junção de arrays
echo "função: array_merge() " . "<br>";
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