<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <title>Livraria</title>
    <body>
        <h3>Detalhes</h3>
        <?php
        function convertedata($data) {
            $data_vetor = explode('-', $data);
            $novadata = implode('/', array_reverse($data_vetor));
            return $novadata;
        }

        include_once('../conexao.php');


        if (isset($_GET['id']) && is_numeric(base64_decode($_GET['id']))) {
            $id = base64_decode($_GET['id']);
        } else {
            header('Location: index.php');
        }
        $query = mysqli_query($conexao, "select * from livros where id = $id");

        if (!$query) {
            echo '<input type="button" onclick="window.location=' . "'index.php'" . ';" value="Voltar"><br><br>';
            die('<b>Query Inválida:</b>' . @mysqli_error($conexao));
        }

        $dados = mysqli_fetch_array($query);

        echo "<table boreder='1px'><tr><td width='250px'>";
        if (empty($dados['imagem'])) {
            $imagem = 'SemImagem.png';
        } else {
            $imagem = $dados['imagem'];
        }
        echo "<img src='imagens/$imagem' >";
        echo "</td><td width='400px'>";
        echo "<b>Codigo: </b>" . $dados['codigo'] . "<br>";
        echo "<b>Titulo: </b>" . $dados['titulo'] . "<br>";
        echo "<b>Descrição: </b>" . $dados['descricao'] . "<br>";
        echo "<b>Data: </b>" . $dados['dataL'] . "<br>";
        echo "<b>Idioma: </b>" . $dados['idioma'] . "<br>";
        echo "<b>Edição: </b>" . $dados['edicao'] . "<br>";
        echo "<b>Autor: </b>" . $dados['autor'] . "<br>";
        echo "<b>Arte: </b>" . $dados['arte'] . "<br>";
        echo "<b>Quantidade de páginas: </b>" . $dados['qtdPags'] . "<br>";
        echo "<b>Editora: </b>" . $dados['editora'] . "<br>";
        echo "</td></tr></table>";

        mysqli_close($conexao);
        ?>
        <br>
        <input type='button' onclick="window.location = '../cliente/index.php';" value="Voltar">
    </body>
</html>
