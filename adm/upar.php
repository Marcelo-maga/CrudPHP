<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Livraria</title>
    </head>
    <body>
        <h3>Upload</h3>
        <div>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <label for="arquivo">Arquivo<br>
                </label> <input type="file" name="arquivo" id="arquivo" /><br>
                <input type="submit" value="Enviar" />
            </form>
        </div>
        <hr>
        <h3>Arquivos No Banco</h3>
        <?php
        include_once('conexao.php');
        $sqlstring = 'SELECT * FROM imagens ORDER BY arquivo';
        $resultado = mysqli_query($conexao, $sqlstring);
        while ($dados = mysqli_fetch_array($resultado)) {
            echo "<img src='arquivos/" . $dados['arquivo'] . "' width='100px' heigth='100px'>";
            echo "<a href='apagar.php?id=" . $dados['id'] . "'><img src='utils/delete.png'></a>";
        }
        ?>
    </body