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
    (2, 'Teste', 'root', '2000-01-01', 'teste@gmail.com', '$2y$10$.N5LSgYTsL9nhthWQSdDrO8/HdnjdfYajKEbN67gi1Hsv9R2F0.8u', '21912345678', '_img/viking.png', 0),
    (3, 'User', '1', '2001-01-01', 't@gmail.com', '$2y$10$csNDCZvxatYZlkAWkn20xOLEj59/n0NyYN3lgdOsjDjZim4DupHaG', '21912345678', '_img/viking.png', 0),
    (4, 'Teste', 'blabla', '1993-02-03', 'tt@gmail.com', '$2y$10$WS89gbRdJ1OifHFdzVL6L.s6UQcAfh3XxEBeq1C6oybotsm1JlaSe', '21912345678', '_img/viking.png', 0),
    (5, 'oi', 'olÃ¡', '2001-12-21', 'gr@gmail.com', '$2y$10$oALadfEv.UKzWU601P53JuUxqo.Ke14bgxXMJ.5vCpDBlcnjS4b6G', '21912345678', '_img/viking.png', 0),
    (6, 'UsuÃ¡rio', 'Legal', '2000-02-13', 't.r@gmail.com', '$2y$10$hoMMrEL3U7nHEnZLW5LZJOG8GSpCo1ERuf9QMiUqZY2o.gwjJVPvO', '21912345678', '_img/viking.png', 0),
    (7, 'Mais', 'Um', '1985-07-05', 'edadi@gmail.com', '$2y$10$iG1gDO5huqSy0GydCryhgO7co8WynnUYlADq4XXVQH6DPwwa6p1xS', '21912345678', '_img/viking.png', 0),
    (8, 'User', '2', '2003-06-02', 'user@gmail.com', '$2y$10$YlwE1DGTPInHq5mTFHTD8eI6BmHm1wG.3H3TfC4vwCDUwBVIu2gzq', '21912345678', '_img/viking.png', 0),
    (9, 'Falta ', 'Pouco', '2001-01-01', 'testee@gmail.com', '$2y$10$1vgBnTBlGb2EIl4ihdVMaOel0YW3lqHK1Smo/a7qgdbE1CDlHqVKa', '21912345678', '_img/viking.png', 0),
    (10, 'Para', 'Finalizar', '1995-04-13', 'teste1@gmail.com', '$2y$10$gW4KEfeHPIjYo4LiA6cyi.JQWX9YxQratysnbtp4u50fCudznwuF.', '21912345678', '_img/viking.png', 0);

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
    (15, 1, '2021-11-23 22:30:00', 'olÃ¡', 'uploads/img_61a58e34a3e417.84002398.jpg'),
    (16, 1, '2021-11-23 22:58:00', '.', ''),
    (27, 1, '2021-12-09 15:27:00', 'Teste', ''),
    (18, 1, '2021-11-23 23:01:00', '', 'uploads/img_61a58d65b31b51.29654766.jpg'),
    (20, 2, '2021-11-23 23:18:00', 'Teste com outro usuÃ¡rio (comum)', ''),
    (21, 2, '2021-11-23 23:18:00', '', 'uploads/img_619da1108289f2.44951621.png'),
    (23, 1, '2021-11-29 23:17:00', 'Teste novo', ''),
    (26, 1, '2021-11-29 23:37:00', 'Oi', 'uploads/img_61a58e76e1a9e3.80175003.jpg'),
    (25, 1, '2021-11-29 23:37:00', 'Teste', '');

INSERT INTO `curtidas` (`id`, `id_usuario`, `id_post`, `id_comentario`) VALUES
    (16, 2, 27, NULL),
    (3, 1, 23, NULL),
    (4, 1, 26, NULL),
    (7, 1, 21, NULL),
    (13, 1, 27, NULL),
    (17, 2, NULL, 7),
    (18, 2, 26, NULL);

INSERT INTO `comentarios` (`id`, `id_usuario`, `id_post`, `data_hora`, `texto`) VALUES
    (7, 2, 27, '2021-12-11 14:25:00', 'Teste'),
    (8, 2, 26, '2021-12-11 14:26:00', 'ComentÃ¡rio');
