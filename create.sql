-- ADM: adm@gmail.com // Senha: adminroot
-- Usuário comum: teste@gmail.com // Senha: teste123

DROP DATABASE IF EXISTS odin;

CREATE DATABASE odin;

DROP USER IF EXISTS 'viking'@'localhost';

CREATE USER 'viking'@'localhost' IDENTIFIED BY 'valhalla';

GRANT ALL PRIVILEGES ON odin.* TO 'viking'@'localhost';

USE odin;

CREATE TABLE usuarios (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome varchar(30) NOT NULL,
    sobrenome varchar(30) NOT NULL,
    datanasc date NOT NULL,
    email varchar(30) NOT NULL,
    senha varchar(300) NOT NULL,
    telefone char(11) NOT NULL,
    fotoperfil varchar(200) DEFAULT "_img/viking.png",
    adm tinyint(1) NOT NULL DEFAULT 0
);

CREATE TABLE posts (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_usuario int NOT NULL,
    data_hora DATETIME NOT NULL,
    texto varchar(400) NOT NULL,
    midia varchar(200),
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
);

CREATE TABLE comentarios (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_usuario int NOT NULL,
    id_post int NOT NULL,
    data_hora DATETIME NOT NULL,
    texto varchar(200) NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id),
    FOREIGN KEY (id_post) REFERENCES posts(id)
);

CREATE TABLE curtidas (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_usuario int NOT NULL,
    id_post int,
    id_comentario int,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id),
    FOREIGN KEY (id_post) REFERENCES posts(id),
    FOREIGN KEY (id_comentario) REFERENCES comentarios(id)
);

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `datanasc`, `email`, `senha`, `telefone`, `fotoperfil`, `adm`) VALUES
    (1, 'ADM', 'root', '2000-01-01', 'adm@gmail.com', '$2y$10$.Ofx2Az5gyQ7P08Xij5eZumg1XNXH4aBIueWDFZZeRJdxwXmAesXS', '21912345678', '_img/viking.png', 1),
    (2, 'Teste', 'root', '2000-01-01', 'teste@gmail.com', '$2y$10$.N5LSgYTsL9nhthWQSdDrO8/HdnjdfYajKEbN67gi1Hsv9R2F0.8u', '21912345678', '_img/viking.png', 0);

INSERT INTO `posts` (`id`, `id_usuario`, `data_hora`, `texto`, `midia`) VALUES
    (11, 1, '2021-11-23 22:08:00', 'Teste com imagem sÃ³ pra manter a regularidade com e sem', ''),
    (2, 1, '2021-11-23 21:56:00', 'Teste', ''),
    (12, 1, '2021-11-23 22:09:00', 'E lÃ¡ vamos nÃ³s...', ''),
    (5, 1, '2021-11-23 21:01:00', 'Teste de horÃ¡rio novamente', ''),
    (6, 1, '2021-11-23 21:02:00', 'Deu certo com GMT+3', ''),
    (7, 1, '2021-11-23 21:30:00', 'Teste com imagem', 'Array'),
    (8, 1, '2021-11-23 21:34:00', 'Teste com imagem certo agr kkkk', 'uploads/img_619d887c120439.33215060.png'),
    (9, 1, '2021-11-23 22:03:00', 'Teste sem imagem', ''),
    (10, 1, '2021-11-23 22:05:00', 'Teste sem imagem mais uma vez pra confirmar umas mudanÃ§as', ''),
    (13, 1, '2021-11-23 22:14:00', '', ''),
    (14, 1, '2021-11-23 22:29:00', '', 'uploads/img_619d9597641a70.53007176.png'),
    (15, 1, '2021-11-23 22:30:00', 'olÃ¡', 'uploads/img_619d95ad813559.48805992.png'),
    (16, 1, '2021-11-23 22:58:00', '.', ''),
    (17, 1, '2021-11-23 22:59:00', '', 'uploads/img_619d9c8e36d923.04249539.png'),
    (18, 1, '2021-11-23 23:01:00', 'Teste', 'uploads/img_619d9d00b97309.73878132.png'),
    (20, 2, '2021-11-23 23:18:00', 'Teste com outro usuÃ¡rio (comum)', ''),
    (21, 2, '2021-11-23 23:18:00', '', 'uploads/img_619da1108289f2.44951621.png'),
    (22, 2, '2021-11-23 23:20:00', 'Texto e imagem', 'uploads/img_619da16001d441.65272384.png');