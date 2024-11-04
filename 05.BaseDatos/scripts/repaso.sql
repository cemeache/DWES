/*SELECT | TODOS LOS DATOS DE UNA TABLA*/
SELECT * 
FROM alumnos;

/*SELECT | X DATOS DE UNA TABLA*/
SELECT nombre,email 
FROM alumnos;

/*WHERE --> CONSULTAS CON CONDICIÓN*/
SELECT nombre,email 
FROM alumnos
WHERE nombre = 'Lucia';

/*WHERE | AND --> Busca valores que coincidan con todas las condiciones*/
SELECT nombre,email 
FROM alumnos
WHERE nombre = 'Lucia' AND email='luciacastro@gmail.com';

/*WHERE | OR --> Busca valores que coincidan con cualquiera de las condiciones*/
SELECT nombre,apellidos
FROM alumnos
WHERE nombre='Maria' OR apellidos='Moruno Herrojo';

/*WHERE | NOT --> Busca valores que no coincidan con una condición*/
SELECT nombre,apellidos
FROM alumnos
WHERE NOT nombre='Lucia';

/*WHERE | IN --> Busca valores que coincidan con una lista de valores*/
SELECT nombre,apellidos
FROM alumnos
WHERE nombre IN('Maria','Celia','Lucia');

/*WHERE | BETWEEN --> Busca valores dentro de un rango*/
SELECT idAlum,nombre
FROM alumnos
WHERE idAlum BETWEEN 8 AND 16;

/*NULL VALUES --> Busca campos con valores nulos*/
SELECT * 
FROM alumnos
WHERE apellidos IS NULL;

/*LIKE --> Busca un patrón en una columna*/
SELECT nombre, apellidos
FROM alumnos
WHERE apellidos LIKE 'mor%';

SELECT nombre, apellidos
FROM alumnos
WHERE apellidos LIKE '%or%';

SELECT nombre, apellidos
FROM alumnos
WHERE apellidos LIKE '_or%';

SELECT nombre, apellidos
FROM alumnos
WHERE nombre LIKE '____';

/*ORDER BY --> Ordena los resultados en orden ascendente o descendente*/
SELECT apellidos, nombre
FROM alumnos
ORDER BY apellidos ASC;

SELECT apellidos, nombre
FROM alumnos
ORDER BY apellidos DESC;

/*UNION --> Devuelve los registros sin duplicados ambas tablas*/
SELECT nombre, apellidos FROM alumnos
UNION
SELECT nombre, apellidos FROM alumnos;

/*UNION ALL --> Devuelve todos los registros de ambas tablas*/
SELECT nombre, apellidos FROM alumnos
UNION ALL
SELECT nombre, apellidos FROM alumnos;

/*DISTINCT --> Devuelve valores no repetidos*/
SELECT DISTINCT nombre 
FROM alumnos;

/*COUNT --> Devuelve el número de filas que coinciden con una condición*/
SELECT COUNT(nombre) 
FROM alumnos;

/*SUM --> Devuelve la suma de una columna*/
SELECT SUM(idAlum) 
FROM alumnos;

/*MIN --> Devuelve el valor más bajo de una columna*/
SELECT MIN(idAlum) 
FROM alumnos;

SELECT MIN(idAlum) 
FROM alumnos
WHERE idALum BETWEEN 8 AND 10;

/*MAX --> Devuelve el valor más alto de una columna*/
SELECT MAX(idAlum) 
FROM alumnos;

SELECT MAX(idAlum) 
FROM alumnos
WHERE idALum BETWEEN 8 AND 10;

/*MEDIA --> Devuelve la media de una columna*/
SELECT AVG(idAlum)
FROM alumnos;

SELECT AVG(idAlum)
FROM alumnos
WHERE idALum>10;

/*INNER JOIN --> Devuelve los registros que tienen valores coincidentes 
    en ambas tablas*/
SELECT *
FROM profesores
INNER JOIN curso_profesor ON profesores.idProfesores = curso_profesor.idProfesores;

SELECT *
FROM profesores
INNER JOIN curso_profesor 
	ON profesores.idProfesores = curso_profesor.idProfesores
INNER JOIN cursos
	ON cursos.idCurso = curso_profesor.idCurso;

SELECT profesores.nombre, cursos.nombreCurso
FROM profesores
INNER JOIN curso_profesor ON profesores.idProfesores = curso_profesor.idProfesores
INNER JOIN cursos ON curso_profesor.idCurso = cursos.idCurso;

SELECT nombre,asignatura,nombreCurso
FROM profesores
INNER JOIN curso_profesor ON profesores.idProfesores = curso_profesor.idProfesores
INNER JOIN cursos ON cursos.idCurso = curso_profesor.idCurso;

/* Enunciados para practicar con INNER JOIN */

/* 1. Obtener el nombre y apellidos de los alumnos junto con el nombre del curso en el que están inscritos. */
SELECT nombre,apellidos,nombreCurso
FROM alumnos
INNER JOIN cursos ON alumnos.idAlum = cursos.idAlum;

/* 2. Listar los nombres de los cursos y los nombres de los profesores que los imparten. */
SELECT nombreCurso,nombre
FROM cursos
INNER JOIN curso_profesor ON cursos.idCurso = curso_profesor.idCurso
INNER JOIN profesores ON profesores.idProfesores = curso_profesor.idProfesores;

/* 3. Mostrar el nombre del curso, la fecha de inicio y la fecha de fin junto con el nombre y apellidos del alumno que lo está tomando. */
SELECT nombreCurso, fechaInicio, fechaFin,nombre,apellidos
FROM cursos
INNER JOIN alumnos ON cursos.idAlum = alumnos.idAlum;

/* 4. Obtener el nombre y apellidos de los profesores junto con el nombre de la asignatura que imparten y el nombre del curso asociado. */
SELECT nombre, apellidos, asignatura, nombreCurso
FROM profesores
INNER JOIN curso_profesor ON profesores.idProfesores = curso_profesor.idProfesores
INNER JOIN cursos ON curso_profesor.idCurso = cursos.idCurso;

/* 5. Listar todos los cursos junto con los nombres de los alumnos y los profesores asociados a cada curso. */
SELECT nombreCurso, alumnos.nombre, profesores.nombre
FROM cursos
INNER JOIN curso_profesor ON cursos.idCurso = curso_profesor.idCurso
INNER JOIN profesores ON profesores.idProfesores = curso_profesor.idProfesores
INNER JOIN alumnos ON alumnos.idAlum = cursos.idAlum;