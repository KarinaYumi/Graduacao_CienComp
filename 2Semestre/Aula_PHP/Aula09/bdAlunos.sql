-- SHOW DATABASES;

-- CREATE DATABASE bdAula09;
-- USE bdAula09;

CREATE TABLE tbAlunos(
	RAAluno INT NOT NULL auto_increment PRIMARY KEY,
    nomeAluno VARCHAR(150) NOT NULL,
    usuarioAluno VARCHAR(100) NOT NULL,
    senhAluno VARCHAR(100) NOT NULL,
    emailAluno varchar(200) ,
    dataNascimentoAluno date
);

INSERT INTO tbAlunos VALUES(null, 'Karina Yumi', 'NinaYumi', 'Senha123', 'yumi@teste.com', '2006-01-03');

INSERT INTO tbAlunos VALUES(null, 'Nina', 'Kaka', 'Senha123', 'Nina@teste.com', '2007-10-21');

SELECT*FROM tbAlunos;

-- DESCRIBE tbAlunos;
