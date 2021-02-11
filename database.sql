CREATE DATABASE livraria;

USE livraria;

CREATE TABLE usuarios(
    id int not null primary key auto_increment,
    user varchar(90) not null,
    senha varchar(90) not null,
    nivel varchar(3) not null
);

CREATE TABLE livros(
    id int not null primary key auto_increment,
    codigo int not null,
    titulo varchar(90) not null,
    descricao text not null,
    dataL varchar(8) not null,
    idioma varchar(50) not null,
    edicao int not null,
    autor varchar(90) not null,
    arte varchar(90) not null,
    qtdPags int not null,
    editora varchar(90) not null,
    imagen varchar(90) null,
);

INSERT INTO usuarios(user, senha, nivel) VALUES
("Marcelo", "marcelo25507", "adm"),
("A", "123", "cli");

INSERT INTO livros(codigo, titulo, descricao, dataL, idioma, edicao, autor, arte, qtdPags, editora) VALUES
(1, "Bakemonogatari", "Um par de gostosa dando mole pra um mlk desanimado e que é vampiro", "02/11/2021", "Ingles", 1, "Nisio", "VoFan", 250, "NewPop");