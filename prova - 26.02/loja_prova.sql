create database loja_prova;
use loja_prova;

create table clientes (
id_cliente int primary key auto_increment , 
nome varchar(250) not null, 
email varchar(250) not null, 
telefone int(20), 
endereço varchar(250)
);

create table pedidos (
id_pedido int primary key auto_increment,
id_cliente int, 
data_pedido date, 
total int(20), 
status_pedido varchar(250),
foreign key (id_cliente) references clientes(id_cliente)
);

create table fornecedores (
id_fornecedor int primary key auto_increment, 
nome_fornecedor varchar(250) not null, 
contato int(20), 
endereco varchar (250)
);

create table produtos (
id_produto int primary key auto_increment, 
nome_produto varchar(250) not null, 
preco decimal (6,2), 
id_fornecedor int, 
estoque int(20),
foreign key (id_fornecedor) references fornecedores(id_fornecedor)
);

create table pagamentos (
id_pagamento int primary key auto_increment, 
id_pedido int, 
metodo_pagamento varchar(250), 
status_pagamento varchar(250), 
valor_pago decimal(6,2),
foreign key (id_pedido) references produtos(id_produto)
);