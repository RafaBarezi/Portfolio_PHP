<?php

echo"<h1>Montagem HTML</h1>";

echo "Olá, esta frase foi escrita por meio da instrução echo.<br>";

echo "Essa é outra linha também.<br>";
//<br> vem de break line.

print "<br>Esta frase foi impressa com a instrução print.<br>";

echo"<br>Echo é uma função e a print é um procedimento. <br>Recomenda-se usar a echo pois é a mais comum.";

echo"<br><br>A instrução print serve para retornar um valor";


/*
 
arquivo é aberto e todo código é enviado para o módulo php depois é iniciada a montagem da resposta :

echo"<html>";
echo"<body>";
echo"texto xyz";
echo"</body>";    fechamento da tag body
echo"</html>";    fechamento da tag html

A resposta é retornada para o navegador do nosso cliente

recebe requisição >>> abre arquivo >>> interpreta script PHP >>> retorna requisição HTML

*/