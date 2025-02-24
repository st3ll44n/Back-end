use employees;

select * from employees;

 -- char lenht (conta qnt de caracteres de uma coluna) 
select first_name, char_length(first_name) from employees;

-- concat (concatenar)
select concat(first_name," nasceu em ",birth_date) from employees;

-- concat_ws (concatena com separador)
select concat_ws(" * ", first_name, last_name) as nome_sobrenome from employees;

-- lcase 'lowercase' (Letra maiuscula para miniscula)
select first_name, lcase(first_name) from employees;

-- ucase 'uppercase' (Letra miniscula para maiuscula)
select first_name, ucase(first_name) from employees;

-- replace (troca de um termo que voce não quer por um que voce quer)
select first_name, last_name from employees where emp_no = 10001;
select replace(first_name,"Georgi","Um cara tranquilo"), last_name from employees where emp_no = 10001;

-- left (recorta termos em qnt especificas da esquerda para direita)
select first_name, left(first_name,3) from employees;

-- right (recorta termos em qnt especificas da direita para esquerda)
select first_name, right(first_name,3) from employees;

select hire_date, birth_date from employees;

-- date diff (diferenças entre datas) 
-- !!! Inicialmente, a diferença é dada em dias mas, pode ser dada em anos e meses tbm
select datediff (hire_date, birth_date) from employees;
select datediff (hire_date, birth_date) from employees;

-- date_format (formataçao de data)
-- !!! pode mudar a formatção de data e filtrar termos a meses, anos ou dias 
select first_name, date_format(hire_date, "%d/ %m/ %y") from employees;

create table emails(
id_email int primary key auto_increment, 
primario varchar(255) not null
);

insert emails(primario) values ("victor santos rohod @ gmail . com");
insert emails(primario) values ("   victor     santos     rohod    @    gmail    .    com");
select * from emails;

select trim(primario) from emails;