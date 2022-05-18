create database Tienda;
USE Tienda;

create table CLIENTES
(
    id_clien int(8) auto_increment,
    username varchar(255) not null,
    pass varchar(10) not null,
    email varchar(255) not null,
    primary key(id_clien)
)
