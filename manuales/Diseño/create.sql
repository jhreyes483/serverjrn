
#drop database manual;
create database manual;
use manual;

create table roles(
id_rol varchar(4) not null primary key,
nom varchar(50),
descripcion varchar(600),
insert_ datetime not null,
update_ datetime not null,
permisos varchar(225)
);

create table users(
id_user int not null primary key auto_increment,
nom1 varchar(30) not null,
correo varchar(100),
nom2 varchar(30),
ape1 varchar(30) not null,
ape2 varchar(30),
clave varchar(30) not null,
foto varchar(30),
insert_ datetime not null,
update_ datetime not null,
status varchar(5) not null,
id_rol varchar(4) not null
);
alter table users add constraint FK_rol_user foreign key(id_rol) references roles(id_rol) on update cascade on delete cascade;

create table lenguajes(
id_lenguaje int not null primary key auto_increment,
nom varchar(60) not null
);
create table manuales(
id_manual int not null primary key auto_increment,
id_lenguaje int not null,
insert_ datetime,
update_ datetime,
id_user int
);
alter table manuales add constraint FK_user_manual     foreign key(id_user)     references users(id_user) on update cascade on delete cascade;
alter table manuales add constraint FK_lenguaje_manual foreign key(id_lenguaje) references lenguajes(id_lenguaje) on update cascade on delete cascade;

describe items;
describe manuales;
create table items(
id_item int not null primary key auto_increment,
titulo varchar(50),
id_manual int
);
alter table items add constraint FK_manual_item  foreign key(id_manual) references manuales(id_manual) on update cascade on delete cascade;


create table modals(
id_modal int not null primary key auto_increment,
titulo_modal varchar(50) not null,
titulo_btn varchar(50) not null,
descripcion varchar(600),
id_item int not null
);
alter table modals add constraint item_modal   foreign key(id_item) references items(id_item) on update cascade on delete cascade;

create table tipos(
id_tipo int not null primary key auto_increment,
nombre varchar(50) not null,
descripcion varchar(225)
);

create table anexos(
id_anexo int not null primary key auto_increment,
titulo varchar(60),
btn varchar(60),
descricion varchar(600),
img varchar(70),
id_modal int not null,
id_tipo int not null,
insert_ datetime,
update_ datetime,
user_update int
);
alter table anexos add constraint item_tipo_anexo foreign key(id_tipo) references tipos(id_tipo) on update cascade on delete cascade;
alter table anexos add constraint item_tipo_modal foreign key(id_modal) references modals(id_modal) on update cascade on delete cascade;





