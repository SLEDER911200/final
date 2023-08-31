-- Creación de la tabla 'Proveedores'
CREATE TABLE Proveedores (
    proveedor_id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    direccion VARCHAR(255),
    telefono VARCHAR(15),
    email VARCHAR(255) UNIQUE,
    pais VARCHAR(50)
);

-- Creación de la tabla 'Productos'
CREATE TABLE Productos (
    producto_id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_producto VARCHAR(255) NOT NULL,
    precio DECIMAL(10,2),
    fecha_fabricacion DATE,
    cantidad_stock INT,
    proveedor_id INT,
    FOREIGN KEY (proveedor_id) REFERENCES Proveedores(proveedor_id) ON DELETE CASCADE
);
