create database teste;

use teste;

create table usuario(
    id int not null auto_increment,
    email varchar(255) not null,
    senha varchar(30) not null,
    primary key(id)
)engine=InnoDB;

create table clientes(
    idCliente int not null auto_increment,
    nome varchar(180) not null,
    cpf char(11) not null,
    tel char(15) not null,
    email varchar(255) not null,
    endereco varchar(255) not null,
    primary key(idCliente)
)engine=InnoDB;

create table produtos(
    idProduto int not null auto_increment,
    nome varchar(180) not null,
    preco decimal(10,2) not null,
    quantidade int not null,
    primary key(idProduto)
)engine=InnoDB;

create table colaborador(
    idColaborador int not null auto_increment,
    nome varchar(180) not null,
    cargo varchar(80) not null,
    salario decimal(10,2) not null,
    primary key(idColaborador)
)engine=InnoDB;

create table fornecedor(
    idFornecedor int not null auto_increment,
    nome varchar(180) not null,
    cnpj char(18) not null, 	
    tipo varchar(100) not null,
    primary key(idFornecedor)
)engine=InnoDB;