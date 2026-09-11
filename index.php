<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Usuario</title>
</head>
<body>
    <div>
        <h1>Dados do Usuario</h1>
        <form action="cadastro_usu.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" required><br><br>

            <input type="submit" value="Enviar">

        </form>
    </div>
</body>
</html>