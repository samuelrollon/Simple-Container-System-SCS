-- Creación de la BBDD
DROP DATABASE IF EXISTS scs;
CREATE DATABASE scs;

USE scs;

-- Creación de tablas
CREATE TABLE employees(
id INT AUTO_INCREMENT,
name VARCHAR(25) NOT NULL,
lastname VARCHAR(50) NOT NULL,
department ENUM('Direccion','Marketing','IT','RRHH','Ventas','AttCliente','NoDefinido') DEFAULT 'NoDefinido' NOT NULL,
reg_date DATE DEFAULT '0001-01-01' NOT NULL,
CONSTRAINT pk_employees PRIMARY KEY (id)
);

INSERT INTO employees
(name,lastname,department,reg_date)
VALUES ('AdminTest','AdminTest','Direccion','2023-02-02');



CREATE TABLE projects(
id INT AUTO_INCREMENT,
title VARCHAR(50) DEFAULT 'Sin titulo',
project_lead INT,
department ENUM('Direccion','Marketing','IT','RRHH','Ventas','AttCliente','NoDefinido') DEFAULT 'NoDefinido' NOT NULL,
start_date DATE DEFAULT '0001-01-01' NOT NULL,
end_date DATE DEFAULT '0001-01-01' NOT NULL,
state ENUM('En progreso','Parado','Cerrado','Abandonado','Pendiente') DEFAULT 'Pendiente',
details VARCHAR(300) DEFAULT 'Sin detalles',
CONSTRAINT pk_projects PRIMARY KEY (id),
CONSTRAINT fk_proj_emplo1 FOREIGN KEY (project_lead) REFERENCES employees (id) ON UPDATE CASCADE ON DELETE SET NULL
);

INSERT INTO projects
(project_lead,department,start_date,end_date,state)
VALUES (1,'NoDefinido',CURDATE(),CURDATE(),'Cerrado');



CREATE TABLE clients(
id INT AUTO_INCREMENT NOT NULL,
name VARCHAR(25) NOT NULL,
location VARCHAR(50),
reg_date DATE DEFAULT '0001-01-01',
state ENUM('Activo','Inactivo','Perdido','Potencial') NOT NULL DEFAULT 'Potencial',
CONSTRAINT pk_clients PRIMARY KEY (id)
);

INSERT INTO clients(
name, location, state)
VALUES ('PERFEN SL','C/Limonada 13, Collado Villalba, Madrid','Potencial');


CREATE TABLE sales(
id INT AUTO_INCREMENT,
seller_id INT NOT NULL,
details VARCHAR(250) DEFAULT 'Sin detalles',
revenue FLOAT(8,2) NOT NULL,
client_id INT,
CONSTRAINT pk_sales PRIMARY KEY (id),
CONSTRAINT fk_sales_cli FOREIGN KEY (client_id) REFERENCES clients (id) ON UPDATE CASCADE ON DELETE SET NULL
);

INSERT INTO sales(
seller_id,details,revenue,client_id)
VALUES (1,'Venta de limonadas',500.00,1);




-- Creación del usuario para la conexión Apache
CREATE USER 'root'@'scs-apache-cont' IDENTIFIED BY 'debian';