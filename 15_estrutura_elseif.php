
<h1>Estrutura elseif</h1>

<!DOCTYPE html>

<html lang = "pt-br">

    <head>

        <meta charset = "UTF-8">

        <title>Estrutura elseif</title>

    </head>

    <body>

        <?php
        echo"Por favor, digite sua idade:";

        if (isset($_POST['idade'])) {
            $idade = $_POST['idade'];

            if ($idade < 13) {
                echo "<br><br>A idade informada é de uma criança.<br><br>";
            } elseif ($idade >= 13 and $idade < 18) {
                echo "<br><br>A idade informada é de um adolescente.<br><br>";
            } elseif ($idade >= 18 and $idade < 65) {
                echo "<br><br>A idade informada é de uma pessoa adulta.<br><br>";
            } else {
                echo "<br><br>A idade informada é de uma pessoa idosa.<br><br>";
            }
        }
        ?>

        <form method="POST">

            <input type = "text" name = "idade"/>

            <input type = "submit" />

        </form>

    </body>

</html>

