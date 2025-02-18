<?php

echo"<h1>Operadores de atribuição compostos</h1>";

echo"Servem para deixar o código mais legível.<br>";

/*
 
atribuição normal:
 
$x = 10; direira para esquerda
$x = ($x + 1); direira para esquerda

operador de atribuição composto

$x+ = 1; é a mesma coisa que $x = $x + 1; ou seja, o próprio número mais uma unidade
  
$x = 9;
$y = 3;

$x += $y é 12
$x -= $y é 06
$x = $y é 27
$x /= $y é 03
$x %= $y é 00
 
*/

echo"<br>Incremento<br><br>";

$num01 = 0;
while ($num01 < 10) {
    $num01 += 1; // $num + 10
    echo $num01 . "<br>";
}

echo"<br>Incremento de 10 em 10:<br><br>";
 
$num01 = 0;
while ($num01 < 100) {
    $num01 += 10; // $num + 10
    echo $num01 . "<br>";
}

echo"<br>Decremento de 50 em 50:<br><br>";

$num02 = 500;
while ($num02 > 0) {
    $num02 -= 50; // $num - 50
    echo $num02 . "<br>";
}
