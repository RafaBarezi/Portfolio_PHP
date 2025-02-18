<?php

// Funзгo range

/* 

retorna uma sequкncia numйrica

sua fуrmula й : range($low, $high, $step = NULL);

бs vezes $step serб 1 

*/

//$x = range(0,10); 
// o passo й de 2 em 2.
$x = range(0,10,2); 
// ou $x = range(10,0); para gerar a lista ao contrбrio

$y = range ( "a", "z" );
print_r ( $y );