<?php

// Parтmetros default

# forma de determinar o valor de um parтmetro. Se a funчуo for invocada sem parтmetro, o valor em questуo serс 0. Portanto podemos deixar sem definiчуo se desejar.

function login($user = "root", $key = "123") {
	echo "user = " . $user;
	echo "key = " . $key;
}

login ();
# ou login("eXcript","12345") caso deseje definir

?>