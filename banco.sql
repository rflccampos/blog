CREATE DATABASE blog;

use blog;

CREATE TABLE usuario(
    id int auto_increment primary_key,
    login varchar(255),
    senha varchar(255)
);

CREATE TABLE post(
    id int auto_increment primary_key,
    titulo varchar(255),
    preview varchar(255),
    conteudo varchar(255),
    autor varchar(255),
    data datetime,
    usuario_FK int,
    FOREIGN KEY(usuario_FK) REFERENCES usuario(id)
);