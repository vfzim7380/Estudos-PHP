<?php 
    require_once'../config/conexao.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $sexo = $_POST['sexo'];
        $civil = $_POST['civil'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone']; 
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $convenio = $_POST['convenio'];

        $sql = "INSERT INTO usuario 
            (nome, data_nasc, sexo, estado_civil, endereco, telefone, email, cpf, rg, convenio)
            VALUES ('$nome', '$idade', '$sexo', '$civil', '$endereco', '$telefone', '$email', '$cpf', '$rg', '$convenio')";

        if($conexao->query($sql)){
            echo"<br>" . "Cadastro realizado!"; 
        } else {
            echo"<br>" . "Erro " . $conexao -> error;
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuarios</title>
</head>
<body>
    <div>
        <a href="../index.php">VOLTAR</a>
    </div>
</body>
</html>