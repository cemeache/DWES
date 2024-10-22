/*Creamos la base de datos comprobando que no esté creada ya*/
CREATE DATABASE IF NOT EXISTS bdalum; /*Por defecto --> Codificación UTF8*/

/*Nos aseguramos que estamos trabajando con esta base de datos*/
USE bdalum;

/*Creamos la tabla de alumnos*/
CREATE TABLE IF NOT EXISTS alumnos (
    idAlum INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telefono CHAR(9) NOT NULL,
    CONSTRAINT pk_alumnos PRIMARY KEY (idAlum)
); /*ENGINE=InnoDB DEFAULT CHARSET=utf8 || Explicación mañana en clase*/