<?php

// Operação ternária II

/*

if (isset($_GET["texto1"])) {
    $txt = $_GET["texto1"];
} else {
    $txt = "A chave não existe.";
}
echo $txt;  

Vamos enviar valor e verifica-lo através de uma url

*/

$txt = isset($_GET["texto1"]) ? $_GET["texto1"] : "A chave não existe";

echo $txt;

//http://localhost/projeto32_operacao_ternaria/operacao_ternaria.php?texto1=aaaaa&texto2=bbbbb

?>
 


   

