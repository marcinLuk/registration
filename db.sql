
create database IF NOT EXISTS registration;

use registration;

CREATE TABLE users 
(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(20) NOT NULL,
    password CHAR(40) NOT NULL,
    email VARCHAR(50) NOT NULL
);

GRANT SELECT , INSERT , UPDATE , DELETE
on registration.*
to  root@localhost IDENTIFIED BY '';