create database webSeite;
use webSeite;
create table kunde(
id int(11) not null auto_increment primary key,
vorname varchar(50),
nachname varchar(50),
email varchar(50)  not null,
passwort varchar(50),
ist_Admin boolean not null default false

);
