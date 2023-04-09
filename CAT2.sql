CREATE DATABASE user_database;

USE user_database;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) UNIQUE NOT NULL,
  email VARCHAR(100) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL,
  fisrtname VARCHAR(100),
  lastname VARCHAR(100),
);
INSERT INTO users(id,username,email,password,firstname,lastname)
VALUES('','','',''.'','');