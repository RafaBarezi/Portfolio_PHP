<h1>do while (caso de uso)</h1>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title>do while</title>
</head>

<body>

	<?php

	if (isset($_POST["dependentes"])) {
		$dependentes = $_POST["dependentes"];
		if (!is_numeric($dependentes)) {
			$dependentes = 1;
			echo "<script>alert('Você digitou um valor não numérico!')</script>";
		}
		$conta = 0;
		echo "<table border='1'>
        <tr>
          <th></th>
          <th>Nome</th>
          <th>Nasc</th>
        </tr>";

		do {
			$conta = $conta + 1;
			echo " <tr>
                    <td>dependente $conta</td>
                    <td><input type = 'text' name = 'Nome' ></td>
                    <td><input type = 'text' name = 'Nasc' ></td>
               </tr>";
		} while ($conta < $dependentes);
		echo "</table>";
	}
	?>

	<form method="POST">
		<input type="text" name="dependentes"> <input type="submit">
	</form>

</body>

</html>