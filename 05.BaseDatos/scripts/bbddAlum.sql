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
    CONSTRAINT pk_alumnos PRIMARY KEY (idAlum),
    CONSTRAINT uc_email UNIQUE (email)
); /*ENGINE=InnoDB DEFAULT CHARSET=utf8 || Explicación mañana en clase*/

CREATE TABLE cursos (
    idCurso INT NOT NULL AUTO_INCREMENT,
    idAlum INT NOT NULL,
    nombreCurso VARCHAR(100) NOT NULL,
    fechaInicio DATE NOT NULL,
    fechaFin DATE NOT NULL,
    PRIMARY KEY (idCurso),
    FOREIGN KEY (idAlum) REFERENCES alumnos(idAlum)
);

CREATE TABLE profesores (
    idProfesores int NOT NULL AUTO_INCREMENT, /* MySQL auto_increment */
    nombre varchar(50) NOT NULL,
    apellidos varchar(50) NOT NULL,
    email varchar(150) UNIQUE NOT NULL,
    asignatura varchar(100) NOT NULL,
    CONSTRAINT pk_idProfesores PRIMARY KEY (idProfesores)
);

CREATE TABLE IF NOT EXISTS curso_profesor (
    idCurso INT NOT NULL,
    idProfesores INT NOT NULL,
    PRIMARY KEY (idCurso, idProfesores),
    FOREIGN KEY (idCurso) REFERENCES cursos(idCurso),
    FOREIGN KEY (idProfesores) REFERENCES profesores(idProfesores)
);