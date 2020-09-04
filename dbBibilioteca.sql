create database DBbiblioteca;
use DBbiblioteca;

create table tblCliente(
	idCliente int(4) not null auto_increment primary key,
    idLivro int(4) not null,
    nome varchar(150) not null, 
    sexo varchar(1) not null,
    celular varchar(17) not null,
    rua varchar(150) not null,
    cep varchar(10) not null,
    dataDeRetirada date,
    
    constraint FK_livro_cliente 
    foreign key (idLivro) 
    references tblLivro (idLivro)
);

create table tblLivro(
	idLivro int(100) not null auto_increment primary key,
    idGenero int(4) not null,
    idTipo int(4) not null,
    idArea int(4) not null,
    idAutor int(4) not null,
    nomeDoLivro varchar(150) not null,
    nomeDaEditora varchar(150) not null,
    quantidadeDeExmplares varchar(100) not null,
    img varchar(255) not null,
    ativacao boolean not null,
    
    constraint FK_livro_genero 
    foreign key (idGenero) 
    references tblGenero (idGenero),
    
    constraint FK_livro_tipo 
    foreign key (idTipo) 
    references tblTipo (idTipo),
    
    constraint FK_livro_area 
    foreign key (idArea) 
    references tblArea (idArea),
    
    constraint FK_livro_Autor
    foreign key (idAutor) 
    references tblAutor (idAutor)
);

create table tblArea(
	idArea int(4) not null auto_increment primary key,
    area varchar(150)
);

create table tblTipo(
	idTipo int(4) not null auto_increment primary key,
    tipo varchar(150)
);

create table tblGenero(
	idGenero int(4) not null auto_increment primary key,
    genero varchar(150)
);

create table tblAutor(
	idAutor int(4) not null auto_increment primary key,
    nomeAutor varchar(150) not null
);

# ========= LOGIN ============

create table tblusuario(
	idUsuario int(4) not null auto_increment primary key,
    nivel int(4) not null,
    nomeUsuario varchar(50) not null,
    senha varchar(150) not null,
    email varchar(150) not null,
    ativacao boolean not null
);

select * from tblautor;
 
create table tblNivel(
	idNivel int(4) not null auto_increment primary key,
    nomeNivel varchar(80) not null,
    ADMcliente boolean not null,
    ADMLivro boolean not null,
    ADMUsuario boolean not null,
    ativacao boolean not null
);

use DBbiblioteca;
show tables;