CREATE DATABASE alquilartemis;

USE alquilartemis;

CREATE TABLE constructora(
    id_constructora INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50),
    telefono INT,
    direccion VARCHAR(50)
);

CREATE TABLE empleado(
    id_empleado INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50),
    telefono VARCHAR(50),
    cargo VARCHAR(50)
);

CREATE TABLE cliente(
    id_cliente INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50),
    telefono INT,
    NIT INT
);

CREATE TABLE productos(
    id_productos INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50),
    stock INT,
    descontinuado VARCHAR(50)
);

CREATE TABLE factura(
    id_factura INT PRIMARY KEY AUTO_INCREMENT,
    id_constructora INT,
    id_empleado INT,
    id_cliente INT,
    id_productos INT,
    fecha DATE,
    hora TIME,
    Foreign Key (id_constructora) REFERENCES constructora(id_constructora),
    Foreign Key (id_empleado) REFERENCES empleado(id_empleado),
    Foreign Key (id_cliente) REFERENCES cliente(id_cliente),
    Foreign Key (id_productos) REFERENCES productos(id_productos)
)