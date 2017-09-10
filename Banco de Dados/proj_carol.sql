CREATE DATABASE HEROIS_SOLIDARIOS;
USE HEROIS_SOLIDARIOS;

CREATE TABLE CONTATE_NOS(
    COD_CONTATO INT AUTO_INCREMENT PRIMARY KEY,
    NOME VARCHAR(50),
    EMAIL VARCHAR(50),
    ASSUNTO VARCHAR(20),
    MENSAGEM VARCHAR(256)
);

CREATE TABLE VISITAS(
    CODIGO INT AUTO_INCREMENT PRIMARY KEY,
    DATA_VIS DATE,
    HORARIO_VISITA TIME,
    LOCAL VARCHAR(40),
    HISTORIA VARCHAR(100),
    ENDERECO VARCHAR(100)
);

CREATE TABLE FOTO (
    CODIGO INT AUTO_INCREMENT PRIMARY KEY,
    FOTO BLOB,
    LEGENDA VARCHAR(50) ,
    COD_VIS_GALERIA INT,
    FOREIGN KEY (COD_VIS_GALERIA) REFERENCES VISITAS(CODIGO)
);

CREATE TABLE USUARIO(
    CODIGO INT AUTO_INCREMENT,
    ADMINISTRADOR NOT NULL TINYINT(1),
    NOMECOMPLETO VARCHAR (80),
    EMAIL VARCHAR (100),
    LOGIN_USUARIO VARCHAR(32) NOT NULL,
    SENHA_USUARIO VARCHAR(32) NOT NULL,
    CPF VARCHAR(14),
    ENDERECO TEXT(100),
    DATALOGIN DATETIME,
    PRIMARY KEY (CODIGO)
);

CREATE TABLE DOACAO_DIN(
    CODIGO INT PRIMARY KEY AUTO_INCREMENT,
    QUANTIA DECIMAL (10,2),
    DESCRICAO VARCHAR(100),
    COD_USUARIO INT,
    FOREIGN KEY (COD_USUARIO) REFERENCES USUARIO(CODIGO)
);

CREATE TABLE DOACAO_ITENS(
    QUANTIDADE INT (2),
    TIPO_DOACAO VARCHAR(30),
    INFORMACAO_DOACAO VARCHAR(30),
    OUTROS_ITENS VARCHAR(30),
    COD_DOACAO_ITENS INT AUTO_INCREMENT PRIMARY KEY,
    COD_USUARIO INT,
    FOREIGN KEY (COD_USUARIO ) REFERENCES USUARIO (CODIGO)
);

CREATE TABLE TEMP_USU(
	COD_USUARIO INT,
	COD_VISITA INT,
	FOREIGN KEY (COD_USUARIO) REFERENCES USUARIO(CODIGO),
	FOREIGN KEY (COD_VISITA) REFERENCES VISITAS(CODIGO),
	PRIMARY KEY (COD_USUARIO, COD_VISITA)

);