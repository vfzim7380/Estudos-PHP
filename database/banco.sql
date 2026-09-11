create database medico;
use medico;

CREATE TABLE usuario (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(150) NOT NULL,
    data_nasc DATE NOT NULL,
    sexo VARCHAR(30),
    estado_civil VARCHAR(50),
    endereco VARCHAR(255),
    telefone VARCHAR(20),
    rg VARCHAR(20),
    email VARCHAR(150),
    convenio VARCHAR(150),
    cpf VARCHAR(14)
);

CREATE TABLE dados_saude (
    id_saude INT PRIMARY KEY AUTO_INCREMENT,
    idusuario INT NOT NULL,
    exame VARCHAR(255),
    anamnese TEXT,
    pressao_arterial VARCHAR(10),
    peso DECIMAL(5,2),
    frequencia_cardiaca INT,
    relatorio_clinico TEXT,
    medicamento_uso TEXT,
    diagnosticos TEXT,

    FOREIGN KEY (idusuario) REFERENCES usuario(id_usuario)
);

CREATE TABLE historico_med (
    id_historico INT PRIMARY KEY AUTO_INCREMENT,
    idusuario INT NOT NULL,
    doenca_cronica TEXT,
    tratamento_anterior TEXT,
    hospitalizacoes TEXT,
    procedimentos_realizados TEXT,

    FOREIGN KEY (idusuario) REFERENCES usuario(id_usuario)
);

CREATE TABLE dados_sensiveis (
    id_sensivel INT PRIMARY KEY AUTO_INCREMENT,
    idusuario INT NOT NULL,
    racial VARCHAR(255),
    religiao VARCHAR(255),

    FOREIGN KEY (idusuario) REFERENCES usuario(id_usuario),
    UNIQUE (idusuario)
);