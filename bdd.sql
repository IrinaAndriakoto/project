create database projectS4;
use projectS4;


create table user(
    id_user int PRIMARY KEY AUTO_Increment NOT NULL,
    nom VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(100),
    estAdmin boolean 
);

INSERT INTO user (nom, email, password,estAdmin) VALUES
    ('antonio', 'antonio@gmail.com', '123',true),
    ('irina', 'irina@gmail.com', '456',true),
    ('mark', 'mark@gmail.com', '789',true);