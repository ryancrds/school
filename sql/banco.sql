create schema curso_mysql collate utf8mb4_general_ci;

create  table clientes
(
	id int auto_increment
		primary key,
	nome varchar(100) null,
	email varchar(100) null,
	ddd varchar(3) null,
	celular varchar(9) null,
	cpf varchar(14) not null,
	dividas double null,
	constraint clientes_CPF_uindex
		unique (cpf),
	constraint email_unico
		unique (email)
);

create table produtos
(
	id int auto_increment
		primary key,
	nome varchar(100) null,
	preco double not null
);

create table pedidos
(
	id int auto_increment
		primary key,
	produto_id int null,
	quantidade int null,
	cliente_id int not null,
	total double null,
	descontos double null,
	dividas double null,
	constraint pedidos_clientes_id_fk
		foreign key (cliente_id) references clientes (id),
	constraint pedidos_ibfk_1
		foreign key (produto_id) references produtos (id)
);

create   index produto_id
	on pedidos (produto_id);