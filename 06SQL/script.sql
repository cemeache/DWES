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

/*--  --*/
SELECT `name` AS empresa, officer.fname AS nombreRepre, 
	address AS direccion FROM business, individual.fname AS nombreIndv
INNER JOIN officer ON officer.cust_id = business.cust_id
LEFT JOIN customer ON business.cust_id = customer.cust_id;