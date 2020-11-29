<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <title>Livraria</title>
    <body>
        <h3>Consulta do Produto</h3>
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
                echo '<input type="button" onclick="window.location=' . "'exclusao.php'" . ';" value="Voltar"><br><br>';
                exit;
            } else {
                $dados = mysqli_fetch_array($resultado);
            }
        }
        mysqli_close($conexao);
        ?>
        <b>Código:</b> <input type="number"  value="<?php echo $dados['codigo']; ?>" readonly ><br><br>
        <b>Titulo:</b> <input type="text" value="<?php echo $dados['titulo']; ?>" readonly ><br><br>
        <b>Descrição: </b><br><textarea  rows='3' cols='100' style="resize: none;" readonly ><?php echo $dados['descricao']; ?></textarea><br><br>
        <b>Data: </b> <input type="text" value="<?php echo $dados['dataL']; ?>" readonly ><br><br>
        <b>Quantidade de Págians</b> <input type="number" value="<?php echo $dados['qtdPags']; ?>" readonly ><br><br>
        <b>Editora</b> <input type="text" value="<?php echo $dados['editora']; ?>" readonly ><br><br>
        <b>Idioma</b> <input type="text" value="<?php echo $dados['idioma']; ?>" readonly ><br><br>
        <b>Edição</b> <input type="number" value="<?php echo $dados['edicao']; ?>" readonly ><br><br>
        <b>Autor</b> <input type="text" value="<?php echo $dados['autor']; ?>" readonly ><br><br>
        <b>Arte</b> <input type="text" value="<?php echo $dados['arte']; ?>" readonly ><br><br>
        <form name="produto" action="excluir.php" method="post">
            <input type='hidden' name='codigo' value="<?php echo $dados['codigo']; ?>">
            <input type='submit' value='Apagar'>
            <input type='button' onclick="window.location = 'exclusao.php';" value="Voltar">
        </form>
    </body>
</html>
