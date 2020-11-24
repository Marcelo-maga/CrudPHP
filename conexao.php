<?php

$host = "localhost";
$user = "root";
$pass = "usbw";
$banco = "livraria";

$conexao = @mysqli_connect($host, $user, $pass, $banco)
        or die("Não conectado!");
?>
