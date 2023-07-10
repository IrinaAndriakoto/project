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
    choice VARCHAR(100),

);

create table if not exists code (
    id_code int primary key auto_increment not null ,
    code varchar(5),
    isValid boolean
);

insert into code(id_code,code,isValid) values 
    (1,'AKD',true),
    (2,'LOL',true),
    (3,'EWW',true),
    (4,'POP',true),
    (5,'ATT',true),
    (6,'MAT',false),
    (7,'ERR',false),
    (8,'TYU',false),
    (9,'UWU',true),
    (10,'OUI',false),
    (11,'NON',true),
    (12,'OKE',false),
    (13,'KII',true),
    (14,'SIU',true),
    (15,'KDS',false)
);