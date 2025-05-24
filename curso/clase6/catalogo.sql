create database catalogo;
use catalogo;
# tablas iniciales proyecto catálogo
# marcas
create table marcas
(
    idMarca tinyint unsigned auto_increment primary key,
    mkNombre varchar(50) unique not null
);

# categorías
create table categorias
(
    idCategoria tinyint unsigned auto_increment primary key,
    catNombre varchar(50) unique not null
);

#productos
create table productos
(
    idProducto smallint unsigned auto_increment primary key,
    prdNombre varchar(50) unique not null,
    precio decimal(10,2) unsigned not null,
    idMarca tinyint unsigned not null,
    idCategoria tinyint unsigned not null,
    prdDescripcion varchar(1000),
    prdImagen varchar(50) not null,
    prdActivo boolean default(1),
    foreign key (idMarca) references marcas (idMarca),
    foreign key (idCategoria) references categorias (idCategoria)
);