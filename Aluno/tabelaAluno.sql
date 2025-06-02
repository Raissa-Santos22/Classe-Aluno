CREATE DATABASE usuariopwii;

use usuariopwii;

CREATE TABLE aluno(
    id INT AUTO_INCREMENT PRIMARY KEY,
    ra int,
    nome VARCHAR(100),
    curso VARCHAR(100),
    periodo VARCHAR (50)
);

INSERT INTO aluno SET nome = "Fabio", ra = 123, curso = "Desenvolvimento de Sistemas", periodo = "matutino";