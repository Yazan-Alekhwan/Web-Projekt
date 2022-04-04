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


 
 
 insert into kunde(vorname, nachname, email, passwort, ist_Admin) values('kunde', 'a','k',md5('k'),false);
 insert into kunde(vorname, nachname, email, passwort, ist_Admin) values('Admin', 'a','a',md5('a'),true);



