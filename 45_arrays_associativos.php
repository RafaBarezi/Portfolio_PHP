<?php

// Arrays Associativos

// Todo elemento � vinculado a uma chave que o identifica.
$pontos = [ 
		"Z�" => 11,
		"Jos�" => 4,
		"Zeca" => 22
];

echo "Z�: " . $pontos ["Z�"] . "<br>";
echo "Jos�: " . $pontos ["Jos�"] . "<br>";
echo "Zeca: " . $pontos ["Zeca"] . "<br>";
echo "<br>";

// Para somar:
$pontos ["Zeca"] += 1;
echo $pontos ["Zeca"];

?>