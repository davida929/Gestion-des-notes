SHOW databases ;
use notes ;

create table if not exists enseignant(
	matr char(10) primary key ,
    nom varchar(255) not null,
    prenom varchar(255),
    genre varchar(32) not null,
    dateNaissance date not null,
    tel varchar(16) not null,
    mail varchar(32) unique not null, 
    password varchar(255)
);
create table if not exists devoir (
	id int auto_increment primary key ,
    matr_ens char(10) references enseignant(matr),
    titre char(32),
    classe char(32),
    dateNotes date
);
alter table devoir add column  niveu varchar(255) ;
create table if not exists etudiants (
	code_massar char(32) primary key ,
    nom varchar(255),
    prenom varchar(255)
);
create table if not exists notes (
	id int auto_increment primary key,
    id_devoir int references devoir(id),
    id_etu char(32) references etudiants(code_massar),
    note int 
);

show tables ;

select * from enseignant ;