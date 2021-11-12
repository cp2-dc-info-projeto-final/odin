CREATE DATABASE odin;

USE odin;

CREATE TABLE usuarios (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome varchar(30) NOT NULL,
    sobrenome varchar(30) NOT NULL,
    datanasc date NOT NULL,
    email varchar(30) NOT NULL,
    senha varchar(300) NOT NULL,
    telefone char(11) NOT NULL,
    adm tinyint(1) NOT NULL DEFAULT 0
);

-- Cadastre seu primeiro usuário e use esse comando para torná-lo administrador da rede social:

UPDATE usuarios SET adm = 1 WHERE id = 1;