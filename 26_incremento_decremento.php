<?php

echo"<h1>Incremento e Decremento</h1>";

$x = 0;

echo"incremento: $x ++ significa $x = $x + 1;
// <br>decremento: $x -- significa $x = $x - 1<br><br>";

echo $x ."<br>";
echo ++ $x . "<br>"; // pré incremento - O Valor é adicionado antes da expressão
echo -- $x . "<br>";
echo "<br>";

// ele pode ser usado após a variável, mas só será decrementado ou incrementado na próxima expressão:

echo $x . "<br>";
echo $x ++ . "<br>"; // pós incremento - O valor é adicionado após a expressão
echo $x . "<br>"; 
