/*INSERT alumnos*/

INSERT INTO alumnos (nombre, apellidos, email, telefono) VALUES ('Celia','Moruno Herrojo','celia@gmail.com','151515151');
INSERT INTO alumnos (nombre, apellidos, email, telefono) VALUES ('Maria','Vidigal Barroso','maria@gmail.com','666666666');
INSERT INTO alumnos (nombre, apellidos, email, telefono) VALUES ('Irene','Hidalgo González','irene@gmail.com','777777777');
INSERT INTO alumnos (nombre, apellidos, email, telefono) VALUES ('Chary','González Morillo','chary@gmail.com','888888888');
INSERT INTO alumnos (nombre, apellidos, email, telefono) VALUES ('Vero','García Valencia','vero@gmail.com','161616161');
INSERT INTO alumnos (nombre, apellidos, email, telefono) VALUES ('Alba','Sánchez Bernal','alba@gmail.com','555555555');
INSERT INTO alumnos (nombre, apellidos, email, telefono) VALUES ('Laura', 'Moreno Morillo', 'laura@gmail.com', '333333333');
INSERT INTO alumnos (nombre, apellidos, email, telefono) VALUES ('Carlos', 'Martínez López', 'carlos@gmail.com', '444444444');
INSERT INTO alumnos (nombre, apellidos, email, telefono) VALUES ('Ana', 'Pérez García', 'ana@gmail.com', '222222222');
INSERT INTO alumnos (nombre, apellidos, email, telefono) VALUES ('Luis', 'Fernández Ruiz', 'luis@gmail.com', '999999999');
INSERT INTO alumnos (nombre, apellidos, email, telefono) VALUES ('Elena', 'Jiménez Torres', 'elena@gmail.com', '101010101');
INSERT INTO alumnos (nombre, apellidos, email, telefono) VALUES ('Javier', 'Ramírez Sánchez', 'javier@gmail.com', '202020202');
INSERT INTO alumnos (nombre, apellidos, email, telefono) VALUES ('Marta', 'Díaz Gómez', 'marta@gmail.com', '303030303');
INSERT INTO alumnos (nombre, apellidos, email, telefono) VALUES ('Pedro', 'Romero Vázquez', 'pedro@gmail.com', '404040404');
INSERT INTO alumnos (nombre, apellidos, email, telefono) VALUES ('Lucía', 'Navarro Castro', 'lucia@gmail.com', '505050505');
INSERT INTO alumnos (nombre, apellidos, email, telefono) VALUES ('Raúl', 'Ortega Muñoz', 'raul@gmail.com', '606060606');
INSERT INTO alumnos (nombre, apellidos, email, telefono) VALUES ('Sara', 'Serrano Gil', 'sara@gmail.com', '707070707');
INSERT INTO alumnos (nombre, apellidos, email, telefono) VALUES ('David', 'Molina Ramos', 'david@gmail.com', '808080808');
INSERT INTO alumnos (nombre, apellidos, email, telefono) VALUES ('Paula', 'Rubio Ortiz', 'paula@gmail.com', '909090909');
INSERT INTO alumnos (nombre, apellidos, email, telefono) VALUES ('Miguel', 'Santos Medina', 'miguel@gmail.com', '111111111');
INSERT INTO alumnos (nombre, apellidos, email, telefono) VALUES ('Pedro', 'Cano Barroso', 'pedrocano@gmail.com', '404044444');
INSERT INTO alumnos (nombre, apellidos, email, telefono) VALUES ('Marta', 'Pérez García', 'martaperez@gmail.com', '222220222');
INSERT INTO alumnos (nombre, apellidos, email, telefono) VALUES ('Lucía', 'Castro Uriol', 'luciacastro@gmail.com', '505055555');

/*INSERT cursos*/
INSERT INTO cursos (idAlum, nombreCurso, fechaInicio, fechaFin) VALUES
(1, 'Matemáticas', '2023-01-10', '2023-06-10'),
(2, 'Física', '2023-02-15', '2023-07-15'),
(3, 'Química', '2023-03-20', '2023-08-20'),
(1, 'Biología', '2023-04-25', '2023-09-25');

-- Insertar datos en la nueva tabla
INSERT INTO profesores (nombre, apellidos, email, asignatura) VALUES ('Carlos', 'Perez Lopez', 'carlos@gmail.com', 'Matemáticas');
INSERT INTO profesores (nombre, apellidos, email, asignatura) VALUES ('Ana', 'Martinez Ruiz', 'ana@gmail.com', 'Lengua');
INSERT INTO profesores (nombre, apellidos, email, asignatura) VALUES ('Luis', 'Garcia Fernandez', 'luis@gmail.com', 'Historia');
INSERT INTO profesores (nombre, apellidos, email, asignatura) VALUES ('Marta', 'Sanchez Gomez', 'marta@gmail.com', 'Ciencias');
INSERT INTO profesores (nombre, apellidos, email, asignatura) VALUES ('Jose', 'Lopez Diaz', 'jose@gmail.com', 'Educación Física');
INSERT INTO profesores (nombre, apellidos, email, asignatura) VALUES ('Laura', 'Hernandez Perez', 'laura@gmail.com', 'Inglés');
INSERT INTO profesores (nombre, apellidos, email, asignatura) VALUES ('David', 'Gonzalez Rodriguez', 'david@gmail.com', 'Física');
INSERT INTO profesores (nombre, apellidos, email, asignatura) VALUES ('Sara', 'Ramirez Sanchez', 'sara@gmail.com', 'Química');
INSERT INTO profesores (nombre, apellidos, email, asignatura) VALUES ('Juan', 'Torres Martinez', 'juan@gmail.com', 'Geografía');
INSERT INTO profesores (nombre, apellidos, email, asignatura) VALUES ('Elena', 'Vazquez Lopez', 'elena@gmail.com', 'Biología');