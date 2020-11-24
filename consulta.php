<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <title>Livraria</title>
    <body>
        <h3>Consulta</h3>
        <form name="produto" action="consultar.php" method="post">
            <b>Código:</b> <input type="number" name="codigo"><br><br>
            <input type="submit" value="Ok">
            <input type="reset" value="Limpar">
            <input type='button' onclick="window.location = 'index.php';" value="Voltar">
        </form>
    </body>
</html>
