CREATE DATABASE aula;

USE aula;

CREATE TABLE usuario (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(100) NULL,
    cpf varchar(14) NULL,
    email varchar(100) NULL,
    telefone varchar(50) NULL,
    endereco varchar(255) NULL,
    senha varchar(50) NULL,
    PRIMARY KEY (id)
);
