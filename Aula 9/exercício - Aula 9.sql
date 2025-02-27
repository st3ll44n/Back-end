create database outra_loja;
use outra_loja;

CREATE TABLE clientes (
    id_cliente INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(250) NOT NULL
);

CREATE TABLE pedidos (
    id_pedido INT PRIMARY KEY AUTO_INCREMENT,
    id_cliente INT,
    data_pedido year(4),
    FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente)
);

alter table pedidos modify column data_pedido date;

insert into clientes(nome) values ("Carlos");
insert into clientes(nome) values ("Ana");
insert into clientes(nome) values ("Bruna");
insert into clientes(nome) values ("Jessica");
insert into clientes(nome) values ("Fernanda");
insert into clientes(nome) values ("Victor");

select * from pedidos;

insert into pedidos(id_cliente, data_pedido) values (1 , '2024-12-04');
insert into pedidos(id_cliente, data_pedido) values (1 , '2025-02-18');
insert into pedidos(id_cliente, data_pedido) values (1 , '2023-11-14');
insert into pedidos(id_cliente, data_pedido) values (2 , '2021-02-14');
insert into pedidos(id_cliente, data_pedido) values (5 , '2024-09-30');
insert into pedidos(id_cliente, data_pedido) values (6 , '2021-10-02');
insert into pedidos(id_cliente, data_pedido) values (6 , '2023-04-21');

-- Listando todos os clientes e seus pedidos
SELECT clientes.id_cliente, clientes.nome, pedidos.id_pedido, pedidos.data_pedido FROM Clientes LEFT JOIN Pedidos ON clientes.id_cliente = pedidos.id_cliente ORDER BY clientes.id_cliente;

-- Liste os pedidos e os nomes dos clientes que fizeram esses pedidos.
select clientes.nome , pedidos.data_pedido from clientes inner join pedidos on clientes.id_cliente = pedidos.id_cliente;

-- Mostre quantos pedidos cada cliente fez.
select id_cliente as Cliente, count(id_cliente) as qnt_pedidos from pedidos group by id_cliente;
