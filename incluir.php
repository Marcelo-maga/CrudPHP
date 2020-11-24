<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <title>Livraria</title>
    <body>
        <h3>Inclusão</h3>
        <?php
        include_once('conexao.php');

        $codigo = $_POST['codigo'];
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $data = $_POST['data'];
        $idioma = $_POST['idioma'];
        $edicao = $_POST['edicao'];
        $autor = $_POST['autor'];
        $arte = $_POST['arte'];
        $qtdPags = $_POST['qtdPags'];
        $editora = $_POST['editora'];

        $sqlinsert = "insert into livro (codigo, titulo, descricao, data, idioma, edicao, autor, arte, qtdPags, editora) values ($codigo, 
        '$titulo', '$descricao', '$data', '$idioma', $edicao, '$autor', '$arte', $qtdPags, '$editora')";

        $resultado = @mysqli_query($conexao, $sqlinsert);
        if (!$resultado) {
            echo '<input type="button" onclick="window.location=' . "'index.php'" . ';" value="Voltar"><br><br>';
            die('<b>Query Inválida:</b>' . @mysqli_error($conexao));
        } else {
            echo "Registro Cadastrado com Sucesso";
        }
        mysqli_close($conexao);
        ?>
        <br><br>
        <input type='button' onclick="window.location = 'index.php';" value="Voltar">
    </body>
</html>
