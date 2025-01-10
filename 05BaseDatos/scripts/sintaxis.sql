------------------------CONEXIÓN------------------------

/*USAR X DATABASE*/
USE nombre_bbdd;

------------------------CREATE------------------------

/*CREAR TABLA*/
CREATE TABLE nombre_tabla(
    nombre_campo1 tinyint unsigned PRIMARY KEY,
    nombre_campo2 varchar(20) NOT NULL
);

/*CREAR INDICE*/
CREATE UNIQUE INDEX NOMBRE_INDEX
ON nombre_tabla (nombre_campo);

------------------------ALTER------------------------

/*MODIFICAR ESTRUCTURA | ADD COLUMNA*/
ALTER TABLE nombre_tabla ADD definir_toda_fila;

/*MODIFICAR ESTRUCTURA | MODIFICAR COLUMNA*/
ALTER TABLE mombre_tabla ALTER COLUMN definir_toda_fila;
/*MODIFICAR ESTRUCTURA | ADD CONSTRAINT*/
ALTER TABLE nombre_tabla ADD CONSTRAINT nombre_constraint RESTRICCION(nombre_campo);

------------------------INSERT------------------------

/*INSERTAR FILAS*/
INSERT INTO nombre_tabla VALUES(valor_campo1,valor_campo2);

------------------------UPDATE------------------------

/*MODIFICAR | UNA FILA*/
UPDATE nombre_tabla
SET nombre_campo = nuevo_valor
WHERE nombre_campo_condicion = valor_actual;

/*MODIFICAR | VARIAS FILAS*/
UPDATE nombre_tabla
SET nombre_campo = nuevo_valor
WHERE nombre_campo_condicion IN (valor1,valor2,valor3);

------------------------DROP------------------------

/*DROP DATABASE --> Borra una base de datos*/
DROP DATABASE database_name;

/*DROP TABLE --> Borra una tabla*/
DROP TABLE table_name;

/*DROP INDEX --> Borra un índice*/
DROP INDEX index_name
ON table_name;

/*DROP CONSTRAINT --> Borrar constraint*/
ALTER TABLE nombre_tabla
DROP CONSTRAINT nombre_restriccion;

/*DELETE --> Borra filas de una tabla*/
DELETE FROM table_name
WHERE condition;

/*TRUNCATE --> Borrar filas de una tabla*/
TRUNCATE table_name;


------------------------SELECTS------------------------

/*SELECT | TODOS LOS DATOS DE UNA TABLA*/
SELECT *
FROM table_name;

/*SELECT | X DATOS DE UNA TABLA*/
SELECT column1, column2, ...
FROM table_name;

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

/*COUNT(DISTINCT) --> Cuenta las filas con valores no repetidos*/
SELECT COUNT(DISTINCT column_name)
FROM table_name;

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

/*MEDIA --> Devuelve la media de una columna*/
SELECT AVG(column_name)
FROM table_name
WHERE condition;

/*DAY --> Devuelve el día de una fecha*/
SELECT DAY(fecha)
FROM table_name;

/*MONTH --> Devuelve el mes de una fecha*/
SELECT MONTH(fecha)
FROM table_name;

/*YEAR --> Devuelve el año de una fecha*/
SELECT YEAR(fecha)
FROM table_name;

/*FORMAT --> Formatea una fecha*/
SELECT FORMAT(fecha,'dd/mm')
FROM table_name;

/*SELECT INTO --> Hace el select y crea una tabla nueva con los campos del select y guarda los resultados*/
SELECT *
INTO newtable [IN externaldb]
FROM oldtable
WHERE condition;

SELECT column1, column2, column3, ...
INTO newtable [IN externaldb]
FROM oldtable
WHERE condition;

/*INSERT INTO SELECT --> Insertamos en x tabla datos devueltos del select*/
INSERT INTO table2
SELECT * FROM table1
WHERE condition;

INSERT INTO table2 (column1, column2, column3, ...)
SELECT column1, column2, column3, ...
FROM table1
WHERE condition;

/*SELECT FROM WHERE (SELECT FROM) --> Mostramos datos que cumplan la condicion la cualestá igualada al resultado de otro select*/
SELECT column1, column2, ...
FROM tabla1 [INNER JOIN ...]
WHERE condition = (SELECT FROM table2 [WHERE condition]);

/*Operadores Relacionales*/
/*= | > | < | <= | >= | != | IN | BETWEEN x AND x | */
