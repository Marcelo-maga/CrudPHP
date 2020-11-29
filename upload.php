<?php

include_once('conexao.php');

function randString($size) {

    $basic = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $return = "";
    for ($count = 0; $size > $count; $count++) {

        $return .= $basic[rand(0, strlen($basic) - 1)];
    }
    return $return;
}

$nome_final = randString(20) . ".jpg";

if (substr($_FILES['arquivo']['name'], -3) == "jpg") {
    $dir = './arquivos/';
    $tmpName = $_FILES['arquivo']['tmp_name'];
    $name = $_FILES['arquivo']['name'];

    if (move_uploaded_file($tmpName, $dir . $nome_final)) {
         $sqlstring = "INSERT INTO imagens (id, arquivo) VALUES (null, '$nome_final')";
        mysqli_query($conexao, $sqlstring);
        header('Location: index.php');
    } else {
        echo "Erro ao gravar";
    }
} else {
    echo "Não é documento JPG";
}
?>


