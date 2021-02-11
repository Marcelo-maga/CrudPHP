<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="utils/style.css" media="screen"/>
    <title>Login</title>
</head>
<body class="body">
    <div class="container">
        <div class="menu">
        <form action="validarLogin.php" method="post">

            <legend>Dados de Login</legend>
            <b>Login:</b> <input type="text" name="nome"><br><br>
            <b>Senha:</b> <input type="password" name="senha"><br><br>
            
            <input type="submit" value="Enviar">
        </form>
        </div>
    </div>
</body>
</html>
