<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset = "UTF-8">
    <h1>Tela de login e senha</h1>
</head>

<body>

    <form method="post">
        <input type = "text" name = "login"><br>
        <input type = "password" name = "senha"><br><br>
        <input type = "submit" name = "Confirmar"><br><br><br>

    </form>

    <?php
    $login = "eXcript";
    $senha = "123456";

    # Para que a senha não seja mostrada basta inserir o comando "password" 

    if (isset($_POST["login"])) {

        if ($_POST["login"] == $login && $_POST["senha"] == $senha) {
            echo"Login efetuado com sucesso!";
        } else {
            echo"<script>alert('Acesso negado!')</script>"; # Criação de alerta 
        }
    }
    ?>	

</body>

</html>
