<?php

echo"<h1>Operadores Lógicos</h1>";

echo"São usados para ligar duas expressões:
    
<ul>
<li>Conjunção >>> (&& ou and)</li>
<li>Disjunção >>> (|| ou or)</li>
<li>Negação >>> (NOT(!))</li><br>
<li>(expressão1==true)&&(expressão2==true)</li>
<li>(expressão1)&&(expressão2)</li>
</ul>";

echo"</p>No php, toda expressão é comparada ao TRUE, portanto não é obrigatório definir. Ele sempre vai verificar se a expressão é verdadeira:<br></p>

<ul>
(1>2)&&(2>3)<br>
(expressão1==true)||(expressão2==true)<br>
(expressão1)||(expressão2)<br>
<br>(1>2)||(2>3)<br>
(expressão1==true)||(expressão2==true)<br>
(expressão1)||(expressão2)
</ul>";

$num = 50;

if (($num > 10) && ($num < 100)) {
    echo "($num > 10) && ($num < 100) = verdadeira<BR>";
}

if (($num > 10) || ($num < 100)) {
    echo "($num > 10) || ($num < 100) = verdadeira<BR>";
}
