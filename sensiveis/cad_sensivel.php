<?php

    include"../config/conexao.php";

    $id_usuario = $_POST['buscar_usu'];
    $cor = $_POST['cor'];
    $religiao = $_POST['religiao'];

    $cor = md5($cor);
    $religiao = md5($religiao);

    $sql = "INSERT into dados_sensiveis
        (id_usuario, racial, religiao)
        VALUES ('$id_usuario', '$cor', '$religiao')";

    if($conexao -> query($sql)){
        echo"<br>" . "Cadastro realizado!";
    } else {
        echo"<br>" . "Erro " . $conexao -> error;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Dados Sensiveis</title>
</head>
<body>
    <div>
        <a href="../index.php">VOLTAR</a>
    </div>
</body>
</html>