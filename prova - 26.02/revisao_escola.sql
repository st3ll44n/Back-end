create database escola_ai;
use escola_ai;

create table Aluno(
	id_aluno int primary key auto_increment , 
	nome varchar(250) not null, 
	email varchar(250) not null, 
	data_nascimento date
);

create table Professor (
	id_professor int primary key auto_increment, 
	nome varchar(250) not null, 
	email varchar(250) not null, 
	especialidade varchar(250) not null
);

create table Curso (
	id_curso int primary key auto_increment,
	nome varchar(250) not null, 
	descricao text not null, 
	id_professor int,
	foreign key (id_professor) references Professor(id_professor)
);

create table Matricula (
	id_matricula int primary key auto_increment, 
	id_aluno int, 
	id_curso int, 
	data_matricula date,
	foreign key (id_aluno) references Aluno(id_aluno),
	foreign key (id_curso) references Curso(id_curso)
);

create table Avaliacao (
	id_avaliacao int primary key auto_increment, 
	id_matricula int, 
	nota decimal(6,2), 
	data_avaliacao date,
	foreign key (id_matricula) references Matricula(id_matricula)
);

-- Inserindo dados na tabela de Alunos
INSERT INTO Aluno (nome, email, data_nascimento) VALUES
	('João Silva', 'joao.silva@email.com', '2000-05-15'),
	('Maria Oliveira', 'maria.oliveira@email.com', '1998-09-23'),
	('Carlos Souza', 'carlos.souza@email.com', '1999-12-05'),
	('Ana Santos', 'ana.santos@email.com', '2001-01-30'),
	('Roberta Costa', 'roberta.costa@email.com', '1997-07-12');

-- Inserindo dados na tabela de Professores
INSERT INTO Professor (nome, email, especialidade) VALUES
	('José Pereira', 'jose.pereira@email.com', 'Banco de Dados'),
	('Laura Gomes', 'laura.gomes@email.com', 'Matemática');

-- Inserindo dados na tabela de Cursos
INSERT INTO Curso (nome, descricao, id_professor) VALUES
	('Banco de Dados', 'Curso introdutório de Banco de Dados.', 1),
	('Matemática', 'Curso básico de Matemática.', 2),
	('Programação Web', 'Curso de desenvolvimento web.', 1);

-- Inserindo dados na tabela de Matrículas
INSERT INTO Matricula (id_aluno, id_curso, data_matricula) VALUES
	(1, 1, '2025-02-01'),
	(2, 1, '2025-02-02'),
	(3, 2, '2025-02-01'),
	(4, 2, '2025-02-03'),
	(5, 3, '2025-02-04'),
	(1, 3, '2025-02-04');

-- Inserindo dados na tabela de Avaliações
INSERT INTO Avaliacao (id_matricula, nota, data_avaliacao) VALUES
	(1, 8.5, '2025-02-20'),
	(2, 7.0, '2025-02-21'),
	(3, 9.0, '2025-02-22'),
	(4, 6.5, '2025-02-22');

-- 1. Selecione todos os alunos cadastrados.
select * from Aluno;

-- 2. Selecione os nomes dos cursos e seus respectivos professores.
select curso.nome as CURSO, professor.nome as PROFESSOR from Curso join Professor on Curso.id_professor = Professor.id_professor;

-- 3. Liste os alunos matriculados no curso de "Banco de Dados".
select aluno.nome from Aluno join Matricula on Aluno.id_aluno = Matricula.id_aluno join Curso on Matricula.id_curso = Curso.id_curso where Curso.nome = 'Banco de Dados';

-- 4. Quantos alunos estão matriculados em cada curso?
select nome as CURSO, count(nome) as qnt_alunos from Curso group by nome;

-- 5. Qual a média de notas dos alunos em um curso específico?
select curso.nome, avg(avaliacao.nota) as media_notas from avaliacao join Matricula on avaliacao.id_matricula = matricula.id_matricula join curso on matricula.id_curso = curso.id_curso
where curso.nome = 'Matematica';

-- 6. Liste os alunos que ainda não receberam nota.
select aluno.nome from aluno join matricula on aluno.id_aluno = matricula.id_aluno left join avaliacao on matricula.id_matricula = avaliacao.id_matricula
where avaliacao.nota IS NULL;