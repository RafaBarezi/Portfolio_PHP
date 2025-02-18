<h1>Números pares e ímpares</h1>

<!DOCTYPE html>

<html lang ="pt">

    <head>

        <meta http-equiv="content-type" content="text/html;charset=utf-8" />

        <title>Números pares e ímpares<br></title>

    </head>

    <body>

        <?php
        echo"Por favor, digite um número:";

        if (isset($_POST["num"])) {
            $_POST["num"];

            $num = $_POST["num"];

            if ($num % 2 == 0) {
                echo"<br>Você informou $num";
                echo"<br><br>O número informado é par<br>";
                echo"<br>Por favor, digite um novo número:";
            } else {
                echo"<br>Você informou $num";
                echo"<br><br>O número informado é ímpar<br>";
                echo"<br>Por favor, digite um novo número:";
            }
        }
        ?>

        <form method="POST">

            <input type = "text" name = "num"/>

            <input type = "submit" />

        </form>

    </body>

</html>