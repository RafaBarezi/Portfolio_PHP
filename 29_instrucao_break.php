<?php

// Instru��o break

/*
 
Finaliza a itera��o 

for ($i = 0; $i < 10; $i ++) {
    if ($condicao == true)
        break;
}

while (true) {
    if ($condicao == true)
        break;
}

*/

$i = 0;

while ( true ) {
	$i ++;
	if ($i == 50) {
		break;
	}
	echo $i . "<br>";
}

?>