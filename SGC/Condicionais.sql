create database condicionais;

use condicionais;

create table clientes (
nome_cliente varchar(50) not null,
cpf char(11) not null,
id_cliente int not null auto_increment primary key,
RG varchar(30) not null,
endereço varchar(100) not null,
email varchar(100) not null,
data_nascimento date not null,
telefone char(11)
) auto_increment = 1;

insert into clientes values ('Maria Cristina Dos Santos', '11111111111', 1, '111111', 'Rua Rio Grande, 2830, Ji-Paraná-RO','cidinha@Gmail','1985-06-02','11111111111');
insert into clientes values ('Joao Pereira Da Silva', '22222222222', 2, '222222', 'Rua Jorge Teixeira, 3030, Ji-Paraná-RO','Joaopereira@Gmail','1999-04-11','22222222222');
insert into clientes values ('Paulo Pereira', '33333333333', 3, '333333', 'Rua Piaui, 2930, Ji-Paraná-RO','paulop@Gmail','1995-11-02','33333333333');
insert into clientes values ('Joao Pereira Da Silva', '44444444444', 4, '444444', 'Rua Paraná, 3230, Ji-Paraná-RO','josesouza@Gmail','1989-07-09','44444444444');

truncate table clientes;

drop table clientes;

select * from clientes;

create table produtos (
nome_produto varchar(100) not null,
cod_produto int auto_increment,
marca varchar(70) not null,
valor double not null,
cor char(20) not null,
quantidade int not null,
primary key(cod_produto)
);
insert into produtos values ('calça', 1, 'Zoop', 160.99,'azul', 30, 'G');
insert into produtos values ('Blusa', 2, 'Lunnender', 44.99,'Amarelo', 35,'M');
insert into produtos values ('Bermuda', 3, 'Alldeni', 125.89,'Branco', 40,'P');
insert into produtos values ('Saia', 4, 'Kairons', 94.90,'Azul', 50, 'PP');

select * from produtos;

truncate table produtos;

alter table produtos add tamanho char(3) not null;

create table pedidos (
id_pedido int auto_increment,
data_entrega date not null,
quantidade int not null,
fk_id_cliente int not null,
fk_cod_funcionario int not null,
primary key(id_pedido),
foreign key (fk_id_cliente) references clientes (id_cliente),
foreign key (fk_cod_funcionario) references funcionarios (cod_funcionario)
);

drop table pedidos;
alter table pedidos add constraint fk_id_cliente foreign key (id_cliente) references clientes (id_cliente);
select * from pedidos;

insert into  pedidos values (1, '2020-09-18', 1, 1, 1);
insert into  pedidos values (2, '2020-09-18', 2, 2, 2);
insert into  pedidos values (3, '2020-09-18', 3, 3, 3);
insert into  pedidos values (4, '2020-09-18', 4, 4, 4);

truncate table pedidos;

create table empresa (
fantasia varchar(100) not null,
cnpj varchar(18) not null,
endereco varchar(100) not null,
telefone char(11) not null,
email varchar(100) not null,
primary key(cnpj)
);

create table funcionarios (
nome_funcionario varchar(50) not null,
cod_funcionario int auto_increment,
cpf char(11) not null,
telefone char(11) not null,
email varchar(100) not null,
endereco varchar(100) not null,
primary key(cod_funcionario)
);
select * from funcionarios;

insert into funcionarios values ('Maria Tereza de Andrade', 1, '11111111111', '11111111111', 'mariatereza@hotmail.com', 'Rua tavares, 2121, Ji-Paraná');
insert into funcionarios values ('Gabriel de Oliveira', 2, '22222222222', '22222222222', 'gabrieloliveira@hotmail.com', 'Rua Paraná, 2529, Ji-Paraná-RO');
insert into funcionarios values ('Cristina de Brito', 3, '33333333333', '33333333333', 'cristinabrito@hotmail.com', 'Rua Jorge Teixeira, 2131, Ji-Paraná-RO');
insert into funcionarios values ('Carla Teixeira de Melo', 4, '44444444444', '44444444444', 'carlateixeira@hotmail.com', 'Rua Goias, 2965, Ji-Paraná-RO');

create table pedidos_produtos (
fk_id_pedido int not null,
fk_cod_produto int not null,
foreign key (fk_id_pedido) references pedidos(id_pedido),
foreign key (fk_cod_produto) references produtos (cod_produto)
);
select * from pedidos_produtos;

select * from pedidos_produtos;

