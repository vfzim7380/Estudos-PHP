<?php
    include"../config/conexao.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $id_usurio = $_POST['buscar_usu'];
        $exames = $_POST['exames'];
        $anamnese = $_POST['anamnese'];
        $pressao = $_POST['pressao'];
        $peso = $_POST['peso'];
        $cardiaca = $_POST['cardiaca'];
        $relatorio = $_POST['relatorio'];
        $medicamento = $_POST['medicamento'];
        $diagnostico = $_POST['diagnostico'];

        $sql = "INSERT INTO dados_saude
            (id_usuario, exame, anamnese, pressao_arterial, peso, frequencia_cardiaca, relatorio_clinico, medicamento_uso, diagnosticos)
            VALUES('$id_usurio', '$exames', '$anamnese', '$pressao', '$peso', '$cardiaca', '$relatorio', '$medicamento', '$diagnostico')";

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
    <title>Cadastro de Dados de Saude</title>
</head>
<body>
    <div>
        <a href="../index.php">VOLTAR</a>
    </div>
</body>
</html>