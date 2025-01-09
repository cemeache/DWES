/*--  Cuentas Totales --*/
SELECT COUNT(account_id) AS numCuentas FROM `account`; 

/*-- Clientes Individuales con cuentas asociadas --*/
SELECT fname, address FROM customer 
INNER JOIN individual ON individual.cust_id = customer.cust_id;

/*-- Repre - Empresas + Cliente Indv con cuentas asociadas --*/
SELECT officer.fname AS nombreRepre ,individual.fname AS nombreIndv, `name` AS empresa, address AS direccion FROM customer 
LEFT JOIN business ON business.cust_id = customer.cust_id
LEFT JOIN officer ON officer.cust_id = customer.cust_id
LEFT JOIN individual ON individual.cust_id = customer.cust_id;

/*-- Empresa + Repre + Address --*/
SELECT `name` AS empresa, officer.fname AS nombreRepre, 
	address AS direccion FROM business
INNER JOIN officer ON officer.cust_id = business.cust_id
LEFT JOIN customer ON business.cust_id = customer.cust_id;

/*-- Empresa + Repre + Address + Indv --*/
SELECT `name` AS empresa, officer.fname AS nombreRepre, 
	address AS direccion, individual.fname AS nombreIndv FROM business
INNER JOIN officer ON officer.cust_id = business.cust_id
RIGHT JOIN customer ON business.cust_id = customer.cust_id
LEFT JOIN individual ON individual.cust_id = customer.cust_id;

/*-- Relacion reflexiva [Empleados -> Jefes]--*/

	-- 1. Num Total Empleados
	SELECT COUNT(employee.emp_id) AS numTrabajadores FROM employee;

	-- 2. Num Total Empleados Con Superior
	SELECT COUNT(employee.emp_id) AS numTrabajadoresJefesAsig FROM employee WHERE employee.superior_emp_id IS NOT NULL;

	-- 3. IDs Jefes 
	SELECT DISTINCT employee.superior_emp_id AS idJefes FROM employee WHERE employee.superior_emp_id IS NOT NULL ;

	-- 4. Nombre Jefes
	SELECT DISTINCT employee.superior_emp_id AS idJefe, jefe.fname AS nombreJefe FROM employee 
	INNER JOIN employee AS jefe ON employee.superior_emp_id = jefe.emp_id;

	-- 5. Empleados Junto Jefe [Hay un trabajador que no tiene jefe, Jefe = NULL; por lo que no aparece en el resultado]
	SELECT employee.emp_id AS idTrabajador, employee.fname AS nombreTrabajador, employee.superior_emp_id AS idJefe, 
		jefe.fname AS nombreJefe FROM employee 
	INNER JOIN employee AS jefe ON employee.superior_emp_id = jefe.emp_id;

	-- 6. Todos Empleados Junto Jefe [Si lo tienen asignado]
	SELECT employee.emp_id AS idTrabajador, employee.fname AS nombreTrabajador, employee.superior_emp_id AS idJefe, 
		jefe.fname AS nombreJefe FROM employee 
	LEFT JOIN employee AS jefe ON employee.superior_emp_id = jefe.emp_id;


/*-- Num Clientes Empresas --*/
SELECT COUNT(*) FROM business;

/*-- Suma Avail_balance Total Banco --*/
SELECT SUM(`account`.avail_balance) FROM `account`;

/*-- Media de avail_balance --*/
SELECT AVG(`account`.avail_balance) FROM `account`;

/*-- Cliente - Cuenta/s --*/
SELECT customer.cust_id AS idClient, `account`.account_id AS idCuent, `account`.avail_balance FROM customer
INNER JOIN `account` ON customer.cust_id = `account`.cust_id

/*-- Balance Max --*/
SELECT MAX(`account`.avail_balance) FROM `account`;

/*-- Balance Max + id [Subconsulta]--*/
SELECT `account`.cust_id, `account`.avail_balance FROM `account`
WHERE `account`.avail_balance = (SELECT MAX(`account`.avail_balance) FROM `account`)

/*-- Cuantos empleados hay en cada departamento, nombre departamento + numEmpleados --*/
SELECT department.`name`, COUNT(*) AS numTrbj FROM employee
INNER JOIN department ON department.dept_id = employee.dept_id
GROUP BY department.dept_id

/*-- Count Contratados 2002 --*/
SELECT department.`name`, COUNT(*) AS numTrbj FROM employee
INNER JOIN department ON department.dept_id = employee.dept_id
WHERE YEAR(employee.start_date) = 2002
GROUP BY department.dept_id

SELECT department.`name`, COUNT(*) AS numTrbj FROM employee
INNER JOIN department ON department.dept_id = employee.dept_id
WHERE YEAR(employee.start_date) = 2002
GROUP BY department.dept_id
ORDER BY department.`name` ASC

/*-- Agrupar por años  --*/
SELECT department.`name`, YEAR(employee.start_date) AS año, COUNT(*) AS numTrbj 
FROM employee
INNER JOIN department ON department.dept_id = employee.dept_id
GROUP BY department.dept_id, YEAR(employee.start_date)
ORDER BY department.`name`, YEAR(employee.start_date) ASC

/*-- name depart con numEmpleados [depart +2 empled] --*/
SELECT department.`name`, COUNT(*) AS numTrbj FROM employee
INNER JOIN department ON department.dept_id = employee.dept_id
GROUP BY department.dept_id
HAVING COUNT(*) > 2

/*--  Igual que antes pero usando el alias del count --*/
SELECT department.`name`, COUNT(*) AS numTrbj FROM employee
INNER JOIN department ON department.dept_id = employee.dept_id
GROUP BY department.dept_id
HAVING numTrbj > 2;

/*-- Count -> Valores nulls [No cuneta los valores null] --*/
/*-- Num Total de asignaciones de jefes --*/
SELECT COUNT(employee.superior_emp_id) AS asigJefes FROM employee;

/*-- Count(distint) -> Solo cuenta los valores diferentes --*/
/*-- Num Total de jefes --*/
SELECT COUNT(DISTINCT employee.superior_emp_id) AS numJefes FROM employee;