<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Usuario</title>
</head>
<body>

<div class="navbar">
    <aside class="sidebar">
        <nav>
            <a href="#usuario">Usuario</a>
            <a href="#sensivel">Dados sensíveis</a>
            <a href="#">Historico Médico</a>
            <a href="#">Saude</a>
        </nav>
    </aside>
</div>

    <div name="tabela-cad" id="usuario">
        <h1>Dados do Usuario</h1>
        <form action="usuario/cad_usuario.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" required><br><br>    
            
            <label for="sexo">Sexo:</label> 
            <select id="sexo" name="sexo">
                <option value="">Selecione</option> 
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>  
            </select><br></br>

            <label for="civil">Estado civil:</label> 
            <select id="civil" name="civil">
                <option value="">Selecione</option>
                <option value="solteiro">Solteiro(a)</option>
                <option value="casado">Casado(a)</option>
                <option value="divorciado">Divorciado(a)</option>
                <option value="viuvo">Viúvo(a)</option>
                <option value="separado">Separado(a) judicialmente</option>
            </select><br></br>

            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" required><br><br>

            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" placeholder="(47) 99999-9999" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" required><br><br>

            <label for="rg">RG:</label>
            <input type="text" id="rg" name="rg" required><br><br>

            <label for="convenio">Convênio:</label>
            <input type="text" id="convenio" name="convenio" required><br><br>


            <input type="submit" value="Cadastrar">
        </form>
    </div>

    <div name="tabela-cad" id="sensivel">

    </div>
</body>
</html>