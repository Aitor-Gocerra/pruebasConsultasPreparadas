CREATE DATABASE IF NOT EXISTS pruebasInyection;
USE pruebasInyection;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    correo VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
);

INSERT INTO usuarios (correo, password) VALUES ('usuario@prueba.com', '1234');
INSERT INTO usuarios (correo, password) VALUES ('admin@prueba.com', 'secretoAdmin');