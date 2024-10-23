/*SELECT | TODOS LOS DATOS DE UNA TABLA*/
SELECT *
FROM alumnos;

/*SELECT | X DATOS DE UNA TABLA*/
SELECT idAlum, nombre
FROM alumnos;

/*WHERE | AND --> Busca valores que coincidan con todas las condiciones*/
SELECT column1, column2, ...
FROM table_name
WHERE condition1 AND condition2 AND condition3 ...;

/*WHERE | OR --> Busca valores que coincidan con cualquiera de las condiciones*/
SELECT column1, column2, ...
FROM table_name
WHERE condition1 OR condition2 OR condition3 ...;

/*WHERE | NOT --> Busca valores que no coincidan con una condición*/
SELECT column1, column2, ...
FROM table_name
WHERE NOT condition;

/*WHERE | IN --> Busca valores que coincidan con una lista de valores*/
SELECT column_name(s)
FROM table_name
WHERE column_name IN (value1, value2, ...);

/*WHERE | BETWEEN --> Busca valores dentro de un rango*/
SELECT column_name(s)
FROM table_name
WHERE column_name BETWEEN value1 AND value2;

/*NULL VALUES --> Busca campos con valores nulos*/
SELECT column_name(s)  
FROM table_name 
WHERE campo IS NULL;

/*LIKE --> Busca un patrón en una columna*/
SELECT column1, column2, ...
FROM table_name
WHERE columnN LIKE pattern;

/*ORDER BY --> Ordena los resultados en orden ascendente o descendente*/
SELECT column1, column2, ...
FROM table_name
ORDER BY column1, column2, ... ASC|DESC;

/*INNER JOIN --> Devuelve los registros que tienen valores coincidentes 
    en ambas tablas*/
SELECT tabla1.columna1, tabla2.columna2
FROM tabla1
INNER JOIN tabla2
ON tabla1.columna_comun = tabla2.columna_comun;

/*LEFT JOIN --> Devuelve todos los registros de la tabla de la izquierda y 
    los registros coincidentes de la tabla de la derecha*/
SELECT tabla1.columna1, tabla2.columna2
FROM tabla1
LEFT JOIN tabla2 ON tabla1.columna_comun = tabla2.columna_comun;

/*RIGHT JOIN --> Devuelve todos los registros de la tabla de la derecha y 
    los registros coincidentes de la tabla de la izquierda*/
SELECT tabla1.columna1, tabla2.columna2
FROM tabla1 
RIGHT JOIN tabla2 ON tabla1.columna_comun = tabla2.columna_comun;

/*UNION --> Devuelve los registros sin duplicados ambas tablas*/
SELECT column1, column2, ... FROM table1
UNION
SELECT column1, column2, ... FROM table2;

/*UNION ALL --> Devuelve todos los registros de ambas tablas*/
SELECT column1, column2, ... FROM table1
UNION ALL
SELECT column1, column2, ... FROM table2;

/*DISTINCT --> Devuelve valores no repetidos*/
SELECT DISTINCT column1, column2, ...
FROM table_name;

/*COUNT --> Devuelve el número de filas que coinciden con una condición*/
SELECT COUNT(column_name)
FROM table_name
WHERE condition;

/*SUM --> Devuelve la suma de una columna*/
SELECT SUM(column_name)
FROM table_name
WHERE condition;

/*MIN --> Devuelve el valor más bajo de una columna*/
SELECT MIN(column_name)
FROM table_name
WHERE condition;

/*MAX --> Devuelve el valor más alto de una columna*/
SELECT MAX(column_name)
FROM table_name
WHERE condition;