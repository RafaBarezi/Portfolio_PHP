<?php

echo"<h1>Script em looping</h1>",

$num = 0;

while ( $num < 100 ) {
	$num = $num - 5;
	echo $num . "\n";
}
