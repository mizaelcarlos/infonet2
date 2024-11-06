selecionar todos os dados da tabela clientes:
select * from clientes;

selecionar os nomes e idades dos clientes:
select nome, idade from clientes;

selecionar o nome e a cidade dos clientes que moram em "são paulo":
select nome, cidade from clientes where cidade = 'são paulo';

selecionar todos os clientes com idade maior que 30:
select * from clientes where idade > 30;

selecionar os nomes e e-mails dos clientes que têm "email.com" no e-mail:
select nome, email from clientes where email like '%email.com';

contar quantos clientes estão cadastrados na tabela:
select count(*) from clientes;

selecionar o nome do cliente com o id igual a 3:
select nome from clientes where id_cliente = 3;

selecionar os clientes com idade entre 25 e 35 anos:
select nome, idade from clientes where idade between 25 and 35;

selecionar os clientes que não moram em "rio de janeiro":
select nome, cidade from clientes where cidade != 'rio de janeiro';

ordenar os clientes por idade em ordem crescente:
select nome, idade from clientes order by idade asc;
