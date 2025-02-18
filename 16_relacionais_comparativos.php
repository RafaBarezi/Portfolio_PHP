<?php

echo"<h1>Relacionais comparativos</h1>";

# $retorno = operando1 [OPERADOR] operando2
# if = (operando1 [OPERADOR] operando2) ou  if = (retorno)

var_dump(True); # O valor lógico de toda expressão é true ou false

# var_dump() serve para imprimir o tipo de valor e seu resultado

echo"<h2>Igualdade:</h2>";

echo"var_dump(10 == 10):<br>";
var_dump(10 == 10);
echo"<br><br>var_dump(9 == 10):<br>";
var_dump(9 == 10);
echo"<br><br>var_dump(10 == string 10):<br>";
var_dump(10 == "10");

echo"<h2><br>Negação:</h2>";

echo"var_dump(!10 == 10):<br>";
var_dump(10 != 10);
echo"<br><br>var_dump(11 != 10):<br>";
var_dump(10 != 11);

# O sinal de diferença no PHP é != ou <>

echo"<br><br>Idêntico:</h2>     O sinal === compara se os valores e os tipos são idênticos:";

echo"<br>var_dump(10 === 10)<br>";
var_dump(10 === 10);    
echo"<br><br>var_dump(10 === '10')<br>";
var_dump(10 === '10');

echo"<h2><br>Não Idêntico:</h2>     O !== é o sinal de não idêntico:";

echo"<br>var_dump(10 !== 10)<br>";
var_dump(10 === 10);
echo"<br><br>var_dump(10 !== '10')<br>"; 
var_dump(10 === '10'); # Neste caso é igual mas não identico
