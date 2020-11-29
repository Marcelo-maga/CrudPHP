<<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
<title>Livraria</title>
<body>
<h3>Produtos</h3>
<input type='button' onclick="window.location='index.php';" value="Voltar">
<b>Clique na imagem para ver detalhes</b><br><br>
<?php

	include_once('conexao.php');
	
	$query = mysqli_query($conexao,"select * from livro order by titulo");

	if (!$query) {
		echo '<input type="button" onclick="window.location='."'index.php'".';" value="Voltar"><br><br>';
		die('<b>Query Inválida:</b>' . @mysqli_error($conexao));  
	}

	echo "<table border='1px'>";
	echo "<tr><th width='30px' align='center'>Código</th><th width='250px'>Titulo</th><th width='100px'>Autor</th><th width='100px'>Editora</th><tr>";

	while($dados=mysqli_fetch_array($query)) 
	{
		echo "<tr>";
		echo "<td>". $dados['codigo']."</td>";
		echo "<td>". $dados['titulo']."</td>";
		echo "<td>". $dados['autor']."</td>";
		echo "<td>". $dados['editora']."</td>";

		if (empty($dados['imagem'])){
			$imagem = 'SemImagem.png';
		}else{
			$imagem = $dados['imagem'];
		}
		$id = base64_encode($dados['id']);
		echo "<td align='center'><a href='verproduto.php?id=$id'><img src='imagens/$imagem' width='50px' heigth='50px'></a>";
		echo "</tr>";
	}
	echo "</table>";
	
	mysqli_close($conexao);
?>
<br>
</body>
</html>
