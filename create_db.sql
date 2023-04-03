CREATE DATABASE projetcommande;

USE projetcommande;

CREATE TABLE user (
  uid INTEGER AUTO_INCREMENT PRIMARY KEY,
  fname VARCHAR(50) NOT NULL,
  lname VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(50) NOT NULL,
  isadmin BOOLEAN DEFAULT 0
);

CREATE TABLE dish (
  did INTEGER AUTO_INCREMENT PRIMARY KEY,
  dname VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  price FLOAT NOT NULL
);

CREATE TABLE orders (
  oid INTEGER,
  did INTEGER,
  PRIMARY KEY (oid, did)
);

CREATE TABLE order_user(
  oid INTEGER PRIMARY KEY,
  uid INTEGER
);

CREATE TABLE order_status (
  oid INTEGER PRIMARY KEY,
  ostatus ENUM('En attente', 'En cours de préparation', 'En cours de livraison', 'Livrée') NOT NULL
);

CREATE TABLE menu (
  did INTEGER NOT NULL,
  dname VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  price FLOAT NOT NULL,
  PRIMARY KEY (did)
);
