<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <title>Livraria</title>
    <body>
        <h3>Alteração</h3>
        <?php
        include_once('conexao.php');

        $codigo = $_POST['codigo'];

        $sqlconsulta = "select * from livro where codigo = $codigo";

        $resultado = @mysqli_query($conexao, $sqlconsulta);
        if (!$resultado) {
            echo '<input type="button" onclick="window.location=' . "'index.php'" . ';" value="Voltar"><br><br>';
            die('<b>Query Inválida:</b>' . @mysqli_error($conexao));
        } else {
            $num = @mysqli_num_rows($resultado);
            if ($num == 0) {
                echo "<b>Código: </b>não localizado !!!!<br><br>";
                echo '<input type="button" onclick="window.location=' . "'alteracao.php'" . ';" value="Voltar"><br><br>';
                exit;
            } else {
                $dados = mysqli_fetch_array($resultado);
            }
        }
        mysqli_close($conexao);
        ?>
        <form name="produto" action="alterar.php" method="POST">
        <b>Titulo:</b> <input type="text" value="<?php echo $dados['titulo']; ?>"><br><br>
        <b>Descrição: </b><br><textarea  rows='3' cols='100' style="resize: none;"><?php echo $dados['descricao']; ?></textarea><br><br>
        <b>Data: </b> <input type="text" value="<?php echo $dados['dataL']; ?>"><br><br>
        <b>Quantidade de Págians</b> <input type="number" value="<?php echo $dados['qtdPags']; ?>"><br><br>
        <b>Editora</b> <input type="text" value="<?php echo $dados['editora']; ?>"><br><br>
        <b>Idioma</b> <input type="text" value="<?php echo $dados['idioma']; ?>"><br><br>
        <b>Edição</b> <input type="number" value="<?php echo $dados['edicao']; ?>"><br><br>
        <b>Autor</b> <input type="text" value="<?php echo $dados['autor']; ?>"><br><br>
        <b>Arte</b> <input type="text" value="<?php echo $dados['arte']; ?>" ><br><br>
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpar">
            <input type='button' onclick="window.location = 'alteracao.php';" value="Voltar">
        </form>
    </body>
</html>
