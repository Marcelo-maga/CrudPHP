<html>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Livraria</title>
    <body>
        <h3>Consulta do Produto</h3>
        <?php

        include_once('conexao.php');

        $codigo = $_POST['codigo'];

        $sqldelete = "delete from livro where codigo = '$codigo' ";

        $resultado = @mysqli_query($conexao, $sqldelete);
        if (!$resultado) {
            echo '<input type="button" onclick="window.location=' . "'index.php'" . ';" value="Voltar"><br><br>';
            die('<b>Query Inválida:</b>' . @mysqli_error($conexao));
        } else {
            echo "Excluído com Sucesso";
        }
        mysqli_close($conexao);
        ?>
        <br><br>
        <input type='button' onclick="window.location = 'exclusao.php';" value="Voltar">
    </body>
</html>
