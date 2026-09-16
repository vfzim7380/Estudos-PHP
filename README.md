# Estudos-PHP — Sistema de Cadastro de Dados Médicos

Atividade do curso Técnico em Desenvolvimento de Sistemas (SENAI). O sistema
cadastra pacientes e distribui as informações em tabelas separadas conforme o
tipo de dado: identificação, dados de saúde, histórico médico e dados sensíveis.

## Objetivo do projeto

O foco aqui foi **back-end**: modelagem do banco, relacionamento entre tabelas,
conexão com o MySQL e o processamento dos formulários em PHP. O front-end existe
só como camada de entrada de dados — HTML simples e um CSS básico para a página
ficar legível. Ele não representa o que eu entrego em projetos de interface, e
qualquer avaliação do repositório deve considerar o servidor, não a tela.

Pontos que eu quis praticar:

- Modelagem relacional com chave estrangeira e restrição de unicidade
- Separação dos dados sensíveis (art. 5º, II da LGPD) em tabela própria
- Conexão com MySQL via `mysqli` isolada em um arquivo de configuração
- Recebimento de `POST`, montagem de `INSERT` e tratamento do retorno
- Popular `<select>` a partir de uma consulta ao banco (`SELECT` + `while`)

## Tecnologias

PHP 8 · MySQL · HTML5 · CSS3 · Apache (XAMPP)

## Estrutura

Estudos-PHP/
├── index.php # formulários de cadastro (4 seções)
├── config/
│ └── conexao.php # conexão mysqli com o banco
├── database/
│ └── banco.sql # script de criação do banco e das tabelas
├── usuario/
│ └── cad_usuario.php # INSERT em usuario
├── saude/
│ └── cad_saude.php # INSERT em dados_saude
├── historico/
│ └── cad_historico.php # INSERT em historico_med
├── sensiveis/
│ └── cad_sensivel.php # INSERT em dados_sensiveis
└── assets/
└── style.css


## Banco de dados

`usuario` é a tabela central. As outras três se ligam a ela por `id_usuario`.

| Tabela | Conteúdo | Relação |
|---|---|---|
| `usuario` | nome, nascimento, sexo, estado civil, endereço, contato, CPF, RG, convênio | — |
| `dados_saude` | exame, anamnese, pressão, peso, frequência cardíaca, relatório, medicamentos, diagnósticos | N:1 com `usuario` |
| `historico_med` | doenças crônicas, tratamentos, hospitalizações, procedimentos | N:1 com `usuario` |
| `dados_sensiveis` | cor/raça e religião | 1:1 com `usuario` (`UNIQUE`) |

`cpf` e `rg` têm restrição `UNIQUE` para impedir cadastro duplicado.

## Como rodar

1. Clone o repositório dentro de `htdocs/` (XAMPP) ou `www/` (WAMP).
2. Suba Apache e MySQL pelo painel de controle.
3. No phpMyAdmin, importe `database/banco.sql` — ele cria o banco `medico` e as
   quatro tabelas.
4. Confira as credenciais em `config/conexao.php` (padrão do XAMPP: usuário
   `root`, senha vazia).
5. Acesse `http://localhost/Estudos-PHP/index.php`.

## Melhorias previstas

O código está no estágio de estudo e tem pontos que já identifiquei para a
próxima versão:

- **Prepared statements.** As queries hoje concatenam variáveis direto na string
  SQL, o que deixa o sistema aberto a SQL Injection. Substituir por `prepare()`
  e `bind_param()`.
- **Hash dos dados sensíveis.** Cor/raça e religião passam por `md5()`, que é
  irreversível — então o dado nunca mais pode ser exibido — e já é considerado
  quebrado. Para dado que precisa ser lido depois, o caminho é criptografia
  reversível (`openssl_encrypt`); para senha, `password_hash()`.
- **Validação e sanitização** das entradas antes do `INSERT`.
- **Telas de consulta, edição e exclusão** — hoje o CRUD só tem o C.
- **Feedback de retorno** na própria `index.php`, em vez de uma página separada
  com link de voltar.
- Remover o `echo` de sucesso de conexão do `conexao.php`, que imprime texto
  antes do `<!DOCTYPE html>`.