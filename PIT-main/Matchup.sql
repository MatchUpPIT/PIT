create database bd_MatchUP;
use bd_MatchUP;

create table cadastroPessoal (
id int not null auto_increment primary key,
nome varchar(40) not null,
email varchar(80) not null,
data_nasc date not null,
senha varchar(20) not null
);

create table cadastroJogador (
id int not null auto_increment primary key,
esporte varchar(12) not null,
posicaoFav varchar(20) not null,
peso float(3,2) not null,
altura int(3) not null,
desc_estiloJogo varchar(200),
id_cadastroPessoal int,
foreign key(id_cadastroPessoal) references cadastroPessoal(id)
);

create table cadastroQuadra (
id int not null auto_increment primary key,
esporte varchar(12) not null,
nomeQuadra varchar(40) not null,
endereco varchar (80) not null,
horaAbertura varchar (20) not null,
horaEncerramento varchar (20) not null,
diasFunc varchar (100) not null,
id_cadastroPessoal int,
foreign key(id_cadastroPessoal) references cadastroPessoal(id)
);

INSERT INTO cadastroPessoal (nome, email, data_nasc, senha) values ("gui", "guidias@gmail.com", 10/02/2006, "fodase")
