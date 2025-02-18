create table join_aula;
use join_aula;

create table endereco(
id int primary key auto_increment,
rua varchar(250) not null, 
numero VARCHAR(250) not null, 
pessoa_id int not null,
foreign key (pessoa_id) references pessoa(id)
);

create table pessoa(
id int primary key auto_increment, 
nome varchar(250) not null, 
nacionalidade varchar(5)
);

insert into pessoa(nome,nacionalidade) values ("Stella","BR");
insert into pessoa(nome,nacionalidade) values ("Victor","FR");
insert into endereco (rua,numero, pessoa_id) values ("Ceilandia P Norte","15",1);
insert into endereco (rua,numero, pessoa_id) values ("MontMartre","127",2);

-- INNER JOIN
select pessoa.nome , endereco.rua from pessoa inner join endereco on pessoa.id = endereco.id;
-- RIGHT JOIN
select pessoa.nome , endereco.rua from endereco right join pessoa on pessoa.id = endereco.id;
-- LEFT JOIN
select pessoa.nome , endereco.rua from pessoa left join endereco on pessoa.id = endereco.id;
-- SEM INNER
select pessoa.nome , endereco.rua from pessoa join endereco on pessoa.id = endereco.id;

SELECT * FROM pessoa;

-- GROUP BY
-- o que voce quer? de onde quer? agrupar quem?

use employees;
select gender as Genero, count(gender) as qnt_por_genero from employees group by gender;
select dept_no as Departamento_n , count(dept_no) as qnt_por_departamento from dept_emp group by dept_no;