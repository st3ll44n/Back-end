use employees;
select * from employees.salaries;
-- min
select min(salary) from salaries as salario_mais_baixo; 
-- min raiz
select salary from salaries order by salary ASC limit 1;

-- max
select max(salary) from salaries as salario_mais_alto; 
-- max raiz

-- count 
select count(*)from employees;
select count(*) from employees where gender = "F";
select count(*) from employees where first_name = "Stella"; 
select * from employees where first_name = "Stella";

-- like (pesquisar)
select * from employees where first_name like "Geo%";
select * from employees where first_name like "%or"; 

-- %termo: desconsidera começo
-- termo%: desconsidera fim
-- %termo%: qualquer palavra que tenha esse termo em qualquer ponto 

-- in
select * from employees where last_name in ("Boyle","Genin");

-- between 
select * from salaries where salary between 40000 and 50000; 