<?php

// Fun��o range

/* 

retorna uma sequ�ncia num�rica

sua f�rmula � : range($low, $high, $step = NULL);

�s vezes $step ser� 1 

*/

//$x = range(0,10); 
// o passo � de 2 em 2.
$x = range(0,10,2); 
// ou $x = range(10,0); para gerar a lista ao contr�rio

$y = range ( "a", "z" );
print_r ( $y );