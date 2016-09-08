CREATE DATABASE paradisio;
USE paradisio;

CREATE TABLE clients (
  id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  nom VARCHAR(45),
  prenom VARCHAR(45),
  PRIMARY KEY (id)
);

CREATE TABLE soirees (
  id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  intitule VARCHAR(45),
  theme VARCHAR(45),
  PRIMARY KEY (id)
);