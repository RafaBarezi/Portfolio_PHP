<?php

echo"<h1>do while</h1>";

echo"Neste caso a instrução será executada pelo menos uma vez.<br>Primeiro executa depois confere se é para continuar executando<br><br>";

/* 

Sintaxe:

do{}
while(true);

*/

$conta = 0;

do {
    $conta = $conta + 1;
    echo $conta . "<br>";
} while ($conta < 10); 

/* Funciona como se fosse um if de cabeça para baixo:

{
    $conta = $conta + 1;
    echo $conta."<br>";
} if($conta<10);

*/
