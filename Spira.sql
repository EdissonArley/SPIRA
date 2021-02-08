
CREATE DATABASE IF NOT EXISTS Spira;
use Spira;
CREATE TABLE ROL (
  id    INTEGER  auto_increment PRIMARY KEY,
  rolUser  TEXT
);

CREATE TABLE GRADE (
  id 	INTEGER auto_increment PRIMARY KEY, 
  name   text, 
  hourlyIntensity INTEGER
);

CREATE TABLE USERS (
  id 	INTEGER auto_increment PRIMARY KEY, 
  name   text, 
  password text,
  email  text,
  cellphone text,
  idRol INTEGER,
  idGrade INTEGER,
  FOREIGN KEY(idRol) REFERENCES ROL(id),
  FOREIGN KEY(idGrade) REFERENCES GRADE(id)
);

INSERT INTO ROL (rolUser) VALUES ("Administrator");
INSERT INTO ROL (rolUser) VALUES ("Student");
INSERT INTO USERS (name,password,email,cellphone,idRol) VALUES ("Adminsitrador","PasswordAdmin","Administrador@admin.com",310786598,1);
SELECT * FROM USERS