-- Crear Base de datos
CREATE DATABASE biblioteca;

-- Usar la base de datos
USE biblioteca;

-- Crear la tabla libros
CREATE TABLE IF NOT EXISTS libros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    autor VARCHAR(255) NOT NULL,
    genero VARCHAR(255) NOT NULL,
    disponibilidad BOOLEAN NOT NULL
);

-- Crear la tabla usuarios
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    contrasena VARCHAR(255) NOT NULL,
    tipo_usuario ENUM('admin', 'cliente') NOT NULL
);

-- Crear la tabla transacciones
CREATE TABLE IF NOT EXISTS transacciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    libro_id INT NOT NULL,
    fecha_prestamo TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_devolucion TIMESTAMP DEFAULT NULL NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (libro_id) REFERENCES libros(id)
);

-- Inserción de libros
INSERT INTO libros (titulo, autor, genero, disponibilidad) VALUES
('Cien años de soledad', 'Gabriel García Márquez', 'Realismo mágico', 1),
('1984', 'George Orwell', 'Ciencia ficción', 1),
('To Kill a Mockingbird', 'Harper Lee', 'Novela', 1),
('One Hundred Years of Solitude', 'Gabriel García Márquez', 'Magic Realism', 1),
('The Great Gatsby', 'F. Scott Fitzgerald', 'Fiction', 1);

-- Inserción de usuarios
INSERT INTO usuarios (nombre, contrasena, tipo_usuario) VALUES
('admin', 'test', 'admin'),
('cliente', 'test', 'cliente');

