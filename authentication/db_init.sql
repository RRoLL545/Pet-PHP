CREATE DATABASE users_db;

USE users_db;


CREATE TABLE users
(
  id INT PRIMARY KEY AUTO_INCREMENT,
  userName VARCHAR(255) UNIQUE,
  email VARCHAR(255),
  password VARCHAR(255),
  active TINYINT(1)
);