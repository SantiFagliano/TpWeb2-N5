drop database smitedexsantiagofagliano;
create database SmiteDexSantiagoFagliano;
use smitedexsantiagofagliano;
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
values (1,"Neith","Egipcio", "Cazador", "Neith.jpg", "descripcion"),
(2,"Baco","Romano", "Guardian", "Baco.jpg", "Baco esta buenardo"),
(3,"Izanami","Japones", "Cazador", "Izanami.jpg", "Iza la biza"),
(4,"Kukulkan","Maya", "Mago", "Kukulkan.jpg", "Kuku el klan"),
(5,"Scylla","Griego", "Mago", "Scylla.jfif", "Scylla esta op"),
(6,"Ymir","Nordico", "Guardian", "Ymir.jpg", "Ymir sirve de todo");
/*update Dios set nombre = "Santiago" where Dios.id = 1;
update Dios set id = 1 where Dios.id = 12;*/
select * from Dios;