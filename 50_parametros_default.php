<?php

// Par�metros default

# forma de determinar o valor de um par�metro. Se a fun��o for invocada sem par�metro, o valor em quest�o ser� 0. Portanto podemos deixar sem defini��o se desejar.

function login($user = "root", $key = "123") {
	echo "user = " . $user;
	echo "key = " . $key;
}

login ();
# ou login("eXcript","12345") caso deseje definir

?>