<?php
    include"../config/conexao.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $id_usurio = $_POST['buscar_usu'];
        $doenca = $_POST['doenca'];
        $tratamento = $_POST['tratamento'];
        $hospitalizacoa = $_POST['hospitalizacoa'];
        $peprocedimentoso = $_POST['procedimento'];

        $sql = "INSERT INTO historico_med
            (id_usuario, doenca_cronica, tratamento_anterior, hospitalizacoes, procedimentos_realizados)
            VALUES('$id_usurio', '$doenca', '$tratamento', '$hospitalizacoa', '$peprocedimentoso')";

        if($conexao->query($sql)){
            echo"<br>" . "Cadastro realizado!";
        } else {
            echo"<br>" . "Erro: " . $conexao -> error;
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Historico Medico</title>
</head>
<body>
    <div>
        <a href="../index.php">VOLTAR</a>
    </div>
</body>
</html>