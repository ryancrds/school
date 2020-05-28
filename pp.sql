create schema pp_criando_site_com_php collate utf8mb4_general_ci;

create table pages
(
	title varchar(250) not null,
	url varchar(250) not null,
	body text null,
	`create` datetime not null,
	`update` datetime not null,
	id int auto_increment
		primary key
);

create table users
(
	id int auto_increment
		primary key,
	email varchar(255) not null,
	password varchar(100) not null,
	created datetime not null,
	`update` datetime not null
);

