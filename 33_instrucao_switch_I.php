<?php

// Instru��o switch

/*

switch (valor) {
    case 1:
        funcao_a();
        break;
    case 2:
        funcao_b();
        break;
    case 3:
        funcao_c();
        break;
    default:
        funcao_padrao();
}       

*/

$num = 2;

switch ($num) {
	case 1 :
		echo "O valor � igual a 1";
		break;
	case 2 :
		echo "O valor � igual a 2";
		break;
	default :
		echo "estrutura default executada";
}

?>