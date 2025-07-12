create table roles
(
    idRol tinyint unsigned auto_increment primary key,
    rol varchar(50) unique not null
);

insert into roles
    values
        (default, 'Administrador'),
        (default, 'Supervisor'),
        (default, 'Usuario'),
        (default, 'Invitado');

create table usuarios
(
    idUsuario smallint unsigned auto_increment primary key,
    nombre varchar(50) not null,
    apellido varchar(50) not null,
    email varchar(50) unique not null,
    clave varchar(76) not null,
    idRol tinyint unsigned default(3) not null,
    foreign key (idRol) references roles (idRol),
    activo boolean default(1) not null
);
