create database SmiteDexSantiagoFagliano;
create table Dios(
id int not null,
nombre varchar(30) not null,
pantheon varchar(15) not null,
rol varchar(15) not null,
url_imagen varchar(30),
descripcion text not null,
primary key (id)
);
insert into Dios (id, nombre, pantheon, rol, url_imagen, descripcion)
values (1,"Neith","egipcio", "cazador", )