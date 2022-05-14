create database Tienda
USE Tienda

create table Administrador 
(
    nom_Usu varchar(10) not null,
    contr_Admin varchar(10) not null,
    id_Admin int(8) auto_increment,
    primary key(id_Admin)
)
GO
create table PRODUCTOS
(
    id_Produc int(8) auto_increment,
    nom_Produc varchar(20) not null,
    descrip_Produc varchar(50) not null,
    precio_Produc decimal(10,2) not null,
    stock int not null,
    primary key(id_Produc)
)
GO
create table CLIENTES
(
    id_clien int(8) auto_increment,
    nom_Usu varchar(10) not null,
    contr_cliente varchar(10) not null,
    primary key(id_clien)
)
GO