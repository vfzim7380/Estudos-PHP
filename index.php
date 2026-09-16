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
            <a href="#saude">Saude</a>
            <a href="#medico">Historico Médico</a>
        </nav>
    </aside>
</div>

    <div name="tabela-cad" id="usuario">
        <h1>Dados do Usuario</h1>
        <form action="usuario/cad_usuario.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="idade">Idade:</label>
            <input type="date" id="idade" name="idade" required><br><br>    
            
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
                <h1>Dados Sensiceis</h1>
        <form action="sensiveis/cad_sensivel.php" method="POST">            
            <label for="sexo">Cor ou raça:</label> 
            <select id="sexo" name="sexo">
                <option value="">Selecione</option> 
                <option value="branco">Branco</option>
                <option value="preto">Preto</option>
                <option value="pardo">Pardo</option>
                <option value="amarelo">Amarelo</option>  
                <option value="indigina">Indigina</option>
            </select><br></br>

            <label for="civil">Religião:</label> 
            <input type="text" id="religiao" name="religiao" required><br><br>

            <input type="submit" value="Cadastrar">
        </form>
    </div>

    <div name="tabela-cad" id="saude">
        <h1>Dados de Saúde</h1>
        <form action="saude/cad_saude.php" method="POST">
            <label for="exames">Exames:</label>
            <input type="text" id="exames" name="exames" required><br><br>

            <label for="anamnese">Anamnese:</label>
            <input type="text" id="anamnese" name="anamnese" required><br><br>    

            <label for="pressao">Pressão arterial:</label>
            <input type="text" id="pressao" name="pressao" required><br><br>

            <label for="peso">Peso:</label>
            <input type="number" id="peso" name="peso"required><br><br>

            <label for="cardiaca">Frequência cardíaca:</label>
            <input type="number" id="cardiaca" name="cardiaca" required><br><br>

            <label for="relatorio">Relatórios clínicos:</label>
            <input type="text" id="relatorio" name="relatorio" required><br><br>

            <label for="medicamento">Medicamentos em uso:</label>
            <input type="text" id="medicamento" name="medicamento" required><br><br>

            <label for="diagnostico">Diagnósticos:</label>
            <input type="text" id="diagnostico" name="diagnostico" required><br><br>


            <input type="submit" value="Cadastrar">
        </form>
    </div>

    <div name="tabela-cad" id="medico">
        <h1>Histórico médico</h1>
        <form action="historico/cad_historico.php" method="POST">
            <label for="doenca">Doenças crônicas:</label>
            <input type="text" id="doenca" name="doenca" required><br><br>

            <label for="tratamento">Tratamentos anteriores:</label>
            <input type="text" id="tratamento" name="tratamento" required><br><br>    

            <label for="hospitalizacoa">Hospitalizações:</label>
            <input type="text" id="hospitalizacoa" name="hospitalizacoa" required><br><br>

            <label for="procedimento">Procedimentos realizados:</label>
            <input type="text" id="procedimento" name="procedimento"required><br><br>

            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>