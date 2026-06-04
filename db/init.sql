CREATE DATABASE tienda_videojuegos;

USE tienda_videojuegos;

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL
);

CREATE TABLE videojuegos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    genero VARCHAR(50) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL
);

CREATE TABLE ventas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT NOT NULL,
    fecha DATE NOT NULL,

    CONSTRAINT fk_ventas_clientes
    FOREIGN KEY (cliente_id)
    REFERENCES clientes(id)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
);

CREATE TABLE detalle_venta (
    id INT AUTO_INCREMENT PRIMARY KEY,
    venta_id INT NOT NULL,
    videojuego_id INT NOT NULL,
    cantidad INT NOT NULL,

    CONSTRAINT fk_detalle_venta
    FOREIGN KEY (venta_id)
    REFERENCES ventas(id)
    ON UPDATE CASCADE
    ON DELETE RESTRICT,

    CONSTRAINT fk_detalle_videojuego
    FOREIGN KEY (videojuego_id)
    REFERENCES videojuegos(id)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
);

INSERT INTO videojuegos (titulo, genero, precio, stock) VALUES
('The Legend of Zelda', 'Aventura', 1299, 5),
('FIFA 2025', 'Deportes', 999, 8),
('Minecraft', 'Sandbox', 499, 12);

INSERT INTO clientes (nombre) VALUES
('Jose'),
('Maria');

INSERT INTO ventas (cliente_id, fecha) VALUES
(1, CURDATE()),
(2, CURDATE());

INSERT INTO detalle_venta (venta_id, videojuego_id, cantidad) VALUES
(1, 1, 2),
(2, 2, 1);