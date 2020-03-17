drop database restaurante;
create database restaurante;
use restaurante;

create table cadastro(
idProduto int not null auto_increment primary key,
produto varchar(20) not null,
ingredientes varchar(255) not null,
categoria varchar(20) not null, 
tamanho varchar(15) not null,
valor decimal (10,2) not null,
entrada timestamp default current_timestamp

);

SELECT * FROM cadastro;

insert into cadastro (produto, ingredientes,categoria, tamanho, valor) values ("Blend Bovino", "300g de carne bovina, milho, tomate", "pizza", "G", 25);



insert into categoria (categoria, idProduto, tamanho, valor) values ("Hamburguer", 1, "Grande", 24.00);
select * from categoria;