<?php

// Instru��o continue

/*

 
for ($i = 0; $i < 10; $i ++) {
    if (condicao == true)
        continue; // Finaliza��o do ciclo. O cursor solta para o in�cio do la�o
}

while (true) {
    if (condicao == true)
        continue;
}

*/

for($i = 0; $i < 100; $i ++) {
	if ($i % 2 == 1) {
		continue;
	}
	echo $i . "<br>";
}

?>