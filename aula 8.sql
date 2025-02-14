create database relacionamento;
use relacionamento;
create table alunos (
id int primary key auto_increment,
nome varchar(250) not null,
turma varchar(5)
);

insert into alunos (id, nome, turma) values 
(15826,"Rarysson","001VE"),
(25480,"Juan","002MA"),
(41506,"Stella","003NO") ;

select * from alunos;

create table contatos (
id int primary key auto_increment,
telefone varchar(11),
nome varchar(20),
aluno_id int not null, 
foreign key (aluno_id) references alunos (id)
);

insert into contatos (telefone,aluno_id) values ("(61)955555",15826);
insert into contatos (telefone,aluno_id) values ("(61)955556",15826); 
insert into contatos (telefone,aluno_id) values ("(61)222222",15826);
insert into contatos (telefone,aluno_id) values ("(61)954455",25480);
insert into contatos (telefone,aluno_id) values ("(61)950056",25480);
insert into contatos (telefone,aluno_id) values ("(61)221422",25480);
insert into contatos (telefone,aluno_id) values ("(61)956655",41506);
insert into contatos (telefone,aluno_id) values ("(61)977556",41506);
insert into contatos (telefone,aluno_id) values ("(61)204222",41506);

select * from contatos;
select * from contatos where aluno_id = "25480";
select * ,alunos.nome , alunos.turma, contatos.telefone from alunos join contatos on contatos.aluno_id; 

-- ONE TO MANY
create table clientes (
id int primary key auto_increment,
nome varchar(100)
);

create table pedidos (
id int primary key auto_increment,
valorTotal float,
cliente_id int not null, 
foreign key (cliente_id) references clientes(id)
);

insert into clientes(nome) values ("George");
insert into pedidos(valorTotal,cliente_id) values (90,1);
insert into pedidos(valorTotal,cliente_id) values (80,1);
insert into pedidos(valorTotal,cliente_id) values (100,1);

--SISTEMA DE BAIXA, CUPOM, TV