<?php
    $login = $_POST['nome'];
    $senha = $_POST['senha'];

    $urlAdm = "adm/index.php";
    $urlAluno = "cliente/index.php";

    include_once('conexao.php');

    $query = mysqli_query($conexao, "SELECT user, senha, nivel FROM usuarios WHERE user='$login' AND senha='$senha'");

    ini_set('display_errors', 0 );
    error_reporting(0);
    $row = mysqli_fetch_array($query);
    $acess = $row['nivel'];

    if(mysqli_num_rows($query) != 1){
        echo"<img src='utils/delete.png'></a>
        Erro! cadastro não encontrado" ;
    }else{
        if($acess == "adm"){
            header('Location: '.$urlAdm);
        }if($acess == "cli"){
            header('Location: '.$urlAluno);
        }
    }
?>
