-- CREATE DATABASE bdAlunos;

USE bdALunos;

CREATE TABLE tbAlunos(
            RAAluno INT NOT NULL auto_increment PRIMARY KEY,
            nomeAluno VARCHAR(150) NOT NULL,
            usuarioAluno VARCHAR(100) NOT NULL,
            senhaAluno VARCHAR(100) NOT NULL,
            emailAluno varchar(200) ,
            dataNascimentoAluno DATE
);

describe tbAlunos;

INSERT INTO tbAlunos VALUES(null, 'Enzo Gamberini', 'EnzoGambs', 'Senha123', 'gamberini@teste.com', '2004-02-15');
INSERT INTO tbAlunos VALUES(null, 'Joice Ferreira', 'JoiceFe', 'Senha123', 'joferreira@teste.com', '1982-06-27');
INSERT INTO tbAlunos VALUES(null, 'Kamila Keiko', 'KamiKeiko', 'Senha123', 'keiko@teste.com', '2000-10-05');

INSERT INTO tbAlunos(nomeAluno, usuarioAluno, senhaAluno, emailAluno) 
		VALUES('Luana', 'LuanaLinda', 'Senha123', 'luana@teste.com'),
			  ('Mikaela', 'Mika', 'Senha123', 'mika@teste.com'),
              ('Lica', 'Lili', 'Senha123', 'lica@teste.com');

SELECT * FROM tbAlunos;

SELECT nomeAluno FROM tbAlunos where usuarioAluno = 'Lili';
