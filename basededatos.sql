
-- Base de datos para Cafetería Capibara

CREATE DATABASE IF NOT EXISTS cafeteria_capibara;
USE cafeteria_capibara;

-- Tabla de usuarios
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL UNIQUE,
    contraseña VARCHAR(255) NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabla de pedidos
CREATE TABLE IF NOT EXISTS pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    producto VARCHAR(100) NOT NULL,
    cantidad INT NOT NULL,
    cliente_nombre VARCHAR(100),
    cliente_correo VARCHAR(100),
    fecha_pedido TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabla de mensajes de contacto
CREATE TABLE IF NOT EXISTS contacto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    correo VARCHAR(100),
    mensaje TEXT,
    fecha_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
