<?php

// Instruзгo continue

/*

 
for ($i = 0; $i < 10; $i ++) {
    if (condicao == true)
        continue; // Finalizaзгo do ciclo. O cursor solta para o inнcio do laзo
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