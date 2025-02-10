create database banco;
use banco;
create table contas (
id INT(6) auto_increment NOT NULL PRIMARY KEY,
nome VARCHAR(20) NOT NULL,
sobrenome VARCHAR(20) NOT NULL,
saldo INT(6.2),
dataNas DATE
);
insert into contas (id,nome,sobrenome,saldo,dataNas) values (015544,"Stella","Andrade",5241.52,08-09-2004);
insert into contas (id,nome,sobrenome,saldo,dataNas) values (015174,"Gustavo","Nascimento",5601.52,01-14-2005);
insert into contas (id,nome,sobrenome,saldo,dataNas) values (015614,"William","Ferreira",5871.52,01-10-2003);
select * from contas;