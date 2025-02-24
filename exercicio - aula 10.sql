use employees;
-- Correção de dados 

-- 1.  Correção de Caixa Alta e Baixa
select first_name, ucase(first_name) from employees;
select last_name, ucase(last_name) from employees;

-- 2. Normalização de E-mails
select primario, lcase(primario) from emails;

-- 3. Identificação de Produtos Específicos
select * from produtos where nome_produto = '%notebook%';

-- 4. Verificação de Domínios de E-mail
select count(*) from emails where primario = '%@gmail.com';

-- 5. Padronização de Endereços
select replace(endereco_nome,"Av","Avenida") from endereco;

-- 6. Identificação de Produtos Sem Código
select * from produtos where codigo_produto = '';
