<h1>Ambiente para estudo do PHP (Boilerplate Code)</h1>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <title>Ambiente para estudo do PHP (Boilerplate Code)</title>

</head>

<body>

    <?php

    if (isset($_POST["valor1"])) {   # isset verifica se a informação existe
        echo $_POST["valor1"];
    }
    ?>

    <form method="POST">

        <input type="text" name="valor1" />

        <input type="submit" /> <!-- Definindo botão enviar-->

    </form>

</body>

</html>