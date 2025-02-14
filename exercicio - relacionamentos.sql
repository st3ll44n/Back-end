CREATE DATABASE LIVRARIA_DB;

CREATE TABLE AUTORES(
	id_autor INT PRIMARY KEY auto_increment,
	nome VARCHAR(20) NOT NULL,
	nacionalidade VARCHAR(25)
);
CREATE TABLE LIVROS(
    id_livro INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(50) NOT NULL,
    ano_publicacao INT(4),
    id_autor INT(5),
    FOREIGN KEY (id_autor) REFERENCES autores(id_autor)
);

INSERT INTO AUTORES (id_autor,nome,nacionalidade) VALUES 
    (001,'J.K. Rowling', 'Britânica'),
    (002,'George Orwell', 'Britânica'),
    (003,'Gabriel García Márquez', 'Colombiana');
    
select * from autores;

INSERT INTO LIVROS (id_livro,titulo, ano_publicacao, id_autor) VALUES 
    (001,'Harry Potter e a Pedra Filosofal', 1997, 001),
    (002,'Harry Potter e a Câmara Secreta', 1998, 001),
    (003,'Harry Potter e o Prisioneiro de Azkaban', 1999, 001),
    (004,'Harry Potter e o Cálice de Fogo', 2000, 001),
    (005,'Harry Potter e a Ordem da Fênix', 2003, 001);
    
INSERT INTO LIVROS (id_livro,titulo, ano_publicacao, id_autor) VALUES 
    (006,'1984', 1949, 002),
    (007,'A Revolução dos Bichos', 1945, 002),
    (008,'Guerrilha', 1969, 002),
    (009,'Homage to Catalonia', 1938, 002),
    (010,'O Que Mais Sobrou do Meu Amor', 1951, 002);
    
INSERT INTO LIVROS (id_livro,titulo, ano_publicacao, id_autor) VALUES 
    (011,'Cem Anos de Solidão', 1967, 003),
    (012,'O Amor nos Tempos do Cólera', 1985, 003),
    (013,'Crônica de uma Morte Anunciada', 1981, 003),
    (014,'O General em Seu Labirinto', 1989, 003),
    (015,'Do Amor e Outros Demônios', 1994, 003);

select * from livros;

select autores.nome, count(livros.id_livro) as qnt_livros from autores left join livros on autores.id_autor = livros.id_autor group by autores.nome;

select * from livros where id_autor = "003";
select * from livros where id_autor = "002";
select * from livros where id_autor = "001";