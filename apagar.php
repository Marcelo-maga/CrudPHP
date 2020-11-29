<?php

include_once('conexao.php');
$id = $_GET['id'];

$sqlselect = "SELECT * FROM imagens WHERE id=$id";
$resultado = mysqli_query($conexao, $sqlselect);
$dados = mysqli_fetch_array($resultado);
$nome = $dados['arquivo'];

$sqldelete = "DELETE FROM imagens WHERE id=$id";
mysqli_query($conexao, $sqldelete);

unlink('arquivos/' . $nome);
header('Location: index.php');
?>
