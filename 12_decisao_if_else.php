<?php

echo"<h1>Função if/else</h1>";

/*

if(true)
{
façaIsso();
}
else
{
façaAquilo();
}

*/

$idade = 35; # preencher este campo com a idade desejada

if($idade >= 18)
{
    echo "Você tem $idade, portanto é maior de idade.";
}
else
{
    echo "Você tem $idade, portanto é menor de idade.";
}