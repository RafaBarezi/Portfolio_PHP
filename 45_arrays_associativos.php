<?php

// Arrays Associativos

// Todo elemento é vinculado a uma chave que o identifica.
$pontos = [ 
		"Zé" => 11,
		"José" => 4,
		"Zeca" => 22
];

echo "Zé: " . $pontos ["Zé"] . "<br>";
echo "José: " . $pontos ["José"] . "<br>";
echo "Zeca: " . $pontos ["Zeca"] . "<br>";
echo "<br>";

// Para somar:
$pontos ["Zeca"] += 1;
echo $pontos ["Zeca"];

?>