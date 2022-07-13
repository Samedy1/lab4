CREATE DATABASE webLab4;
USE webLab4;
CREATE TABLE users(id int primary key auto_increment, username varchar(255), email varchar(255), password varchar(255));
create table products(id int primary key auto_increment, name varchar(255), user_id int, amount int, price double, foreign key (user_id) references users(id));