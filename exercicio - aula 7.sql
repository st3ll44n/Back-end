-- 1 banco
use coresdobrasil;
create table vendas(id_venda varchar(5), id_produto varchar(5), quantidade int(20), preco_unitario int(6.2), id_categoria varchar(250));
INSERT INTO vendas (id_venda, id_produto, quantidade, preco_unitario, id_categoria) VALUES 
("554RT", "88015", 2, 14.90, "024"),
("551RT", "88016", 3, 15.90, "025"),
("554RT", "88017", 4, 16.90, "026"),
("559RT", "88018", 5, 17.90, "027"),
("554RG", "88019", 6, 18.90, "028"),
("554RDT", "88020", 7, 19.90, "029"),
("554IT", "88021", 8, 20.90, "030"),
("554WT", "88022", 9, 21.90, "031");
select * from vendas;
select sum(preco_unitario) from vendas;

-- 2 banco
alter table produtos add column estoque int(10);
alter table produtos add column preco decimal(6.2);
alter table produtos drop column cor;
alter table produtos drop column peso;
INSERT INTO Produtos (id, nome, preco, estoque) VALUES 
("006", "Smartphone", 999.99, 50),
("007", "Smartwatch", 349.90, 30),
("008", "Smart TV", 2500.00, 10),
("009", "Smart Speaker", 199.99, 75);

select * from produtos where nome like "%smart%";

-- 3 banco 

alter table clientes add column regiao varchar(2);
select * from clientes;
INSERT INTO Clientes (nome, email, telefone, regiao) VALUES
("João Silva", "joao.silva@email.com", "(11) 98765-4321", "SP"),
("Maria Souza", "maria.souza@email.com", "(21) 91234-5678", "RJ"),
("Carlos Oliveira", "carlos.oliveira@email.com", "(31) 99876-5432", "MG"),
("Ana Costa", "ana.costa@email.com", "(11) 97654-3210", "SP"),
("Ricardo Pereira", "ricardo.pereira@email.com", "(21) 93456-7890", "RJ");

select * from clientes where regiao in ("MG","RJ");