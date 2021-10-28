CREATE DATABASE odin;

CREATE TABLE usuarios (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome varchar(30) NOT NULL,
    sobrenome varchar(30) NOT NULL,
    datanasc date NOT NULL,
    email varchar(30) NOT NULL,
    senha varchar(300) NOT NULL,
    telefone char(11) NOT NULL
    );