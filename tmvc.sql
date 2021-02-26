CREATE DATABASE `tmvc`CHARACTER SET utf8 COLLATE utf8_hungarian_ci;

CREATE TABLE tmvc.posts (
id INT NOT NULL AUTO_INCREMENT,
title VARCHAR (255),
PRIMARY KEY (id)
) CHARSET = utf8 COLLATE = utf8_hungarian_ci;

INSERT INTO tmvc.posts (title) VALUES ('teszt1');
INSERT INTO tmvc.posts (id, title) VALUES (NULL, 'teszt2');