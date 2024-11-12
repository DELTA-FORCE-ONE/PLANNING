create database planning;
use planning;


create table student (
    matricule varchar(50) primary key,
    nom varchar(25),
    prenom varchar(25),
    sexe varchar(1),
    adress varchar(30),
    email varchar(50)
);


create table professor( 
    idprofessor int primary key auto_increment,
    numero int(15),
    nombre_student int,
    matiere varchar(50),
    nom varchar(25),
    prenom varchar(25),
    sexe varchar(1),
    matricule varchar(50)
);


create table salle(
    salle_de_cours varchar(20) primary key
);
