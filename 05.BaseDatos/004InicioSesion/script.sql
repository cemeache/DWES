CREATE TABLE usuario (
    idUsuario INT AUTO_INCREMENT,
    nombre VARCHAR(30) NOT NULL,
    apellidos VARCHAR(80) NOT NULL,
    email VARCHAR(50) NOT NULL,
    nombreUsu VARCHAR(30) NOT NULL,
    contraseña VARCHAR(30) NOT NULL,
    PRIMARY KEY (idUsuario)
);