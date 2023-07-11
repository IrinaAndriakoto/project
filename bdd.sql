create database if not exists projectS4;
use projectS4;
create table if not exists user(
    id_user int PRIMARY KEY AUTO_Increment NOT NULL,
    nom VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(100),
    estAdmin boolean 
);

create table if not exists aboutUser(
    id_aboutUser int PRIMARY KEY AUTO_Increment NOT NULL,
    id_user int,
    id_choice int,
    genre VARCHAR(100),
    poids float,
    taile float,
foreign key (id_user) references user(id_user),
    foreign key (id_choice) references choice(id_choice) 
);

create table if not exists choice(
    id_choice int PRIMARY KEY AUTO_Increment NOT NULL,
    choice VARCHAR(100)

);

create table if not exists code (
    id_code int primary key auto_increment not null ,
    code varchar(5),
    type int ,
    isValid boolean
);

create table if not exists regime(
    id_regime int primary key auto_increment not null,
    regime varchar(100),
    efficacite float
);

CREATE TABLE if not exists activites (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    description TEXT
);

insert into code(id_code,code,type,isValid) values 
    (1,'AKD',2,true),
    (2,'LOL',2,true),
    (3,'EWW',2,true),
    (4,'POP',2,true),
    (5,'ATT',2,true),
    (6,'MAT',2,false),
    (7,'ERR',2,false),
    (8,'TYU',2,false),
    (9,'UWU',2,true),
    (10,'OUI',2,false),
    (11,'NON',2,true),
    (12,'OKE',2,false),
    (13,'KII',2,true),
    (14,'SIU',2,true),
    (15,'KDS',2,false);


create table if not exists demande (
    id_demande int primary key auto_increment,
    id_user int ,
    isValid boolean,
    id_code int ,
    foreign key(id_user) references user(id_user),
    foreign key(id_code) references code(id_code)
);

create table if not exists porte_monnaie(
    id_money int primary key auto_increment,
    montant float,
    id_user int ,
    foreign key(id_user) references user(id_user)
); 

