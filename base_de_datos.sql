--crear la base de datos
create database Tienda
use Tienda

--Crear tablas

create table Administrador 
(
    id_Admin varchar(8) primary key not null,
    nom_Usu varchar(10)not null,
    contr_Admin varchar(10)
)
GO

create table PRODUCTOS
(
    id_Produc varchar(8)primary key not null,
    nom_Produc varchar(20)not null,
    descrip_Produc varchar(50) not null,
    precio_Produc decimal(10,2) not null,
    stock int not null
)
GO

create table CLIENTES
(
    id_clien varchar(8)primary key not null,
    nom_Usu varchar(10) not null,
    contr_cliente varchar(10)not null
)
GO