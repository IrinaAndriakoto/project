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
