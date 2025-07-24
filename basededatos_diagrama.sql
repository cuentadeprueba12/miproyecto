
-- Base de Datos: Ventas_Cafeteria

CREATE DATABASE IF NOT EXISTS ventas_cafeteria;
USE ventas_cafeteria;

-- Tabla Cliente
CREATE TABLE IF NOT EXISTS Cliente (
    Id_cliente VARCHAR(10) PRIMARY KEY,
    Nombre VARCHAR(30),
    Telefono VARCHAR(15),
    Correo VARCHAR(30)
);

-- Tabla Producto
CREATE TABLE IF NOT EXISTS Producto (
    Id_producto VARCHAR(5) PRIMARY KEY,
    Nombre VARCHAR(10),
    Cantidad INT,
    Costo INT
);

-- Tabla Pedido
CREATE TABLE IF NOT EXISTS Pedido (
    Id_pedido INT PRIMARY KEY AUTO_INCREMENT,
    Id_cliente VARCHAR(10),
    Id_producto VARCHAR(5),
    Productos INT,
    Total VARCHAR(9),
    Direccion VARCHAR(30),
    FOREIGN KEY (Id_cliente) REFERENCES Cliente(Id_cliente),
    FOREIGN KEY (Id_producto) REFERENCES Producto(Id_producto)
);
