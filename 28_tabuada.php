<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<title>Tabuada</title>

</head>

<body>

	<?php

	echo "<h1>Tabuada</h1>";

	echo "Por favor, digite o número para ver sua tabuada:<br><br>";
	$tab = 0;

	if (isset($_POST["edTabuada"])) {
		$tab = $_POST["edTabuada"];
		if (!is_numeric($tab)) {
			echo "O valor informado não é um número.<br>";
		} else {

			for ($num = 0; $num <= 10; $num++) {
				echo $num . " x " . $tab . " = " . ($num * $tab) . "<br><br>";
			}

		/*Pode ser feito com for ou while:			

        $num = 1;
		while ( $num <= 10 ) {
			echo $num . " x " . $tab . " = " . ($num * $tab) . "<br>";
			$num ++;
		*/

		}
	}

	?>

	<form method="POST">
		<input type="text" name="edTabuada"> <input type="submit">
	</form>

</body>

</html>