create database ambulatorio;
show databases;

use ambulatorio;

create table paciente(
	cpf int primary key,
	nome varchar(45) not null,
	endereco varchar(45)
);
create table consulta(
	codigo int primary key,
	hora time not null,
	data date not null,
	paciente_cpf int,
	foreign key (paciente_cpf) references paciente (cpf)
);
show tables;
describe paciente;