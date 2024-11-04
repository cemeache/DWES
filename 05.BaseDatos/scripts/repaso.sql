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