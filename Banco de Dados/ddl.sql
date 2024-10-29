#Comando para criar o banco de dados
create database ambulatorio;
show databases;

#selecionar o banco de dados
use ambulatorio;

#Criar tabelas
create table paciente(
	cpf int,
	nome varchar(45) not null,
	endereco varchar(45),
	primary key(cpf)
);
create table consulta(
	codigo int,
	hora time not null,
	data date not null,
	paciente_cpf int,
	primary key (codigo,hora)
	foreign key (paciente_cpf) references paciente (cpf)
);

#Listar tabelas
show tables;

#Detalhes da tabela
describe paciente;

#excluir tabelas
drop table nome_tabela;

#Renomear uma tabela
ALTER TABLE nome_antigo RENAME TO nome_novo;
ALTER TABLE clientes RENAME TO clientes_novos;


#Adicionar uma nova coluna
ALTER TABLE nome_tabela ADD nova_coluna tipo_coluna;
ALTER TABLE clientes ADD data_nascimento DATE;

Remover uma coluna
ALTER TABLE nome_tabela DROP COLUMN nome_coluna;
ALTER TABLE clientes DROP COLUMN endereco;

Renomear uma coluna
ALTER TABLE nome_tabela CHANGE coluna_antiga novo_nome tipo_coluna;
ALTER TABLE clientes CHANGE nome nome_completo VARCHAR(100);


Alterar o tipo de uma coluna
ALTER TABLE nome_tabela MODIFY nome_coluna novo_tipo;
ALTER TABLE clientes MODIFY telefone VARCHAR(15);


Inserir uma chave estrangeira
ALTER TABLE nome_tabela ADD CONSTRAINT nome_constraint FOREIGN KEY (coluna_filha) REFERENCES tabela_referenciada(coluna_referenciada);


