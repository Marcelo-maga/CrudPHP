<html>
    <meta charset="UTF-8">
    <title>Livraria</title>
    <body>
        <h3>Alteração</h3>
        <?php
        include_once('conexao.php');
        $codigo = $_POST['codigo']
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $dataL = $_POST['dataL'];
        $idioma = $_POST['idioma'];
        $edicao = $_POST['edicao'];
        $autor = $_POST['autor'];
        $arte = $_POST['arte'];
        $qtdPags = $_POST['qtdPags'];
        $editora = $_POST['editora'];

        $sqlupdate = "UPDATE livro SET titulo='$titulo', descricao='$descricao', dataL='$dataL', idioma='$idioma', edicao='$edicao',
        autor='$autor', arte='$arte', qtdPags='$qtdPags', editora='$editora' WHERE codigo=$codigo";

        $resultado = @mysqli_query($conexao, $sqlupdate);
        if (!$resultado) {
            echo '<input type="button" onclick="window.location=' . "'index.php'" . ';" value="Voltar"><br><br>';
            die('<b>Inválido:</b>' . @mysqli_error($conexao));
        } else {
            echo "Alterado";
        }
        mysqli_close($conexao);
        ?>
        <br><br>
        <input type='button' onclick="window.location = 'alteracao.php';" value="Voltar">
    </body>
</html>
