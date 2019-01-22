CREATE DATABASE tests;

use tests;

CREATE TABLE users (
	id INT auto_increment primary key,
    email varchar(255) unique,
    password varchar(255) not null
);

CREATE TABLE posts(
	id INT auto_increment primary key,
    user_id INT,
    title varchar(255) not null,
    content TEXT not null,

	foreign key(user_id) references users(id) on update cascade
);