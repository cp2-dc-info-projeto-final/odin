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

CREATE TABLE posts (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_usuario int NOT NULL,
    data_hora DATETIME NOT NULL,
    texto varchar(400) NOT NULL,
    midia varchar(200),
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id);
)

-- Cadastre seu primeiro usuário e use esse comando para torná-lo administrador da rede social:

UPDATE usuarios SET adm = 1 WHERE id = 1;