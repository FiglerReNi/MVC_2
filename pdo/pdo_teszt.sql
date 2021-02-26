CREATE TABLE pdo_teszt.users (
id INT NOT NULL AUTO_INCREMENT,
NAME VARCHAR (255),
email VARCHAR (255),
STATUS VARCHAR (255),
PRIMARY KEY (id)
) CHARSET = utf8 COLLATE = utf8_hungarian_ci;

INSERT INTO pdo_teszt.users (NAME, email, STATUS) VALUES ('FReni', 'teszt@teszt.com', 'admin');
INSERT INTO pdo_teszt.users (NAME, email, STATUS) VALUES ('Teszt', 'teszt@teszt.com', 'admin');
INSERT INTO pdo_teszt.users (NAME, email, STATUS) VALUES ('Teszt1', 'teszt@teszt.com', 'guest');