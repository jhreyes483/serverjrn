#drop database empresa;
create database empresa;
use empresa;

create table tipo_docs(
id_acro varchar(10) not null,
nom_doc varchar(25) not null,
primary key(id_acro)
);

create table skills(
id_skill int primary key not null auto_increment,
nom varchar(35) not null,
descripcion varchar(200)
);

create table roles(
id_acro varchar(5) not null ,
nom_rol varchar(35) not null,
descript varchar(200),
primary key(id_acro)
);


create table equipos(
id_equipo int primary key auto_increment  not null,
nom_equipo varchar(25) not null,
fecha_creacion datetime not null,
obsevacion varchar(200) 
);


create table users (
id_us int not null primary key auto_increment,
documento varchar(20) not null,
nom1 varchar(20) not null,
nom2 varchar(20),
ape1 varchar(20) not null,
ape2 varchar(20) not null,
fecha_n datetime not null,
fecha_crea datetime,
telefono varchar(30),
direccion varchar(30),
foto varchar(30),
correo varchar(30) not null,
password varchar(150),
status int not null,
fk_rol varchar(5) not null, 
fk_equipo int not null, 
fk_doc varchar(10) not null
);
alter table users add constraint fk_rol_users foreign key(fk_rol) references roles(id_acro) on update cascade on delete cascade;
alter table users add constraint fk_equipos_users foreign key(fk_equipo) references equipos(id_equipo) on update cascade on delete cascade;
alter table users add constraint fk_doc_users foreign key(fk_doc) references tipo_docs(id_acro) on update cascade on delete cascade;

create table users_skills(
fk_us int not null,
fk_skill int not null
);
alter table users_skills add constraint users_skills foreign key(fk_us) references users(id_us) on update cascade on delete cascade;
alter table users_skills add constraint users_skills_skill foreign key(fk_skill) references skills(id_skill) on update cascade on delete cascade;
alter table users_skills add primary key (fk_us, fk_skill );

create table tareas(
id_tarea int not null auto_increment,
nom varchar(40) not null,
fecha_asig varchar(10) not null,
status varchar(10) not null,
fk_us int not null,
descript varchar(200),
primary key(id_tarea)
);
alter table tareas add constraint fk_id_us foreign key(fk_us ) references users(id_us) on update cascade on delete cascade;


create table log_avamces(
id_avance int not null primary key,
fecha datetime,
tipo varchar(5),
fk_tareas int
);
alter table log_avamces add constraint fk_tareas  foreign key(fk_tareas) references tareas(id_tarea) on update cascade on delete cascade;

create table empresas(
id int not null primary key auto_increment ,
rut varchar(20),
nom varchar(50) not null,
status varchar(5) not null
);

create table proyectos(
id_proyecto int not null primary key, 
status varchar(5),
fecha_crea datetime not null,
coste integer(10),
tipo_proyecto varchar(5) not null,
descripcion varchar(200),
fecha_termina datetime,
fk_empresa int,
fk_equipo int
);
alter table proyectos add constraint fk_empresa foreign key(fk_empresa) references empresas(id) on update cascade on delete cascade;
alter table proyectos add constraint fk_equipo_proyecto foreign key(fk_equipo) references equipos(id_equipo) on update cascade on delete cascade;


create table tikets(
id_tiket int not null primary key auto_increment,
fecha_crea datetime not null,
fecha_ini  datetime,
fecha_fin  datetime,
status varchar(5) not null,
fk_equipo int not null
);
alter table tikets add constraint fk_equipo foreign key(fk_equipo) references equipos(id_equipo) on update cascade on delete cascade;


create table historias_requerimientos(
id_h int primary key not null,
prioridad varchar(5) not null,
fecha_crea datetime not null,
criterio_aceptacion varchar(200) not null,
obs varchar(200),
fk_proyecto int
);
alter table historias_requerimientos add constraint fk_proyecto_r foreign key(fk_proyecto) references proyectos(id_proyecto) on update cascade on delete cascade;

create table tipo_reunion(
id int not null primary key,
nom varchar(50),
descript varchar(200)
);



create table reuniones(
id_reunion int not null primary key,
fecha_crea datetime,
fecha_reunion datetime,
status varchar(5) not null,
fk_equipo int,
fk_tipo int
); 
alter table reuniones add constraint fk_reuniones foreign key(fk_equipo) references equipos(id_equipo) on update cascade on delete cascade;
alter table reuniones add constraint fk_tipo_reunion foreign key(fk_tipo) references tipo_reunion(id) on update cascade on delete cascade;



